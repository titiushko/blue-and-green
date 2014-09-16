//creamos el modulo y le inyectamos el modulo ngRoute necesario para utilizar rutas
//a partir de la versión 1.2.x de angularjs
var app = angular.module("app", ['ngRoute']);

//configuramos las rutas del blog
//resolve lo utilizamos para comprobar si tiene o no acceso a esa zona
app.config(function($routeProvider)
{
    /*
     *ruta para el formulario de registro
     */
    $routeProvider.when("/register",
            {
                templateUrl: "angular_pages/register.html",
                controller: "authController",
                resolve: {
                    'auth': function(authFactory)
                    {
                        return authFactory.proccessAuth();
                    }
                }
            })
            /*
             *ruta para el formulario de login
             */
            .when("/login",
                    {
                        templateUrl: "angular_pages/login.html",
                        controller: "authController",
                        resolve: {
                            'auth': function(authFactory)
                            {
                                return authFactory.proccessAuth();
                            }
                        }
                    })
            /*
             *ruta para el dashboard
             */
            .when("/dashboard",
                    {
                        templateUrl: "angular_pages/dashboard.html",
                        controller: "dashboardController",
                        resolve: {
                            'auth': function(authFactory)
                            {
                                return authFactory.proccessNoAuth();
                            }
                        }
                    })
            /*
             *ruta para crear un nuevo post
             */
            .when("/add",
                    {
                        templateUrl: "angular_pages/new_post.html",
                        controller: "newPostController",
                        resolve: {
                            'auth': function(authFactory)
                            {
                                return authFactory.proccessNoAuth();
                            }
                        }
                    })
            /*
             *ruta para el editar un post existente
             */
            .when("/edit/:id",
                    {
                        templateUrl: "angular_pages/edit_post.html",
                        controller: "editPostController",
                        resolve: {
                            'auth': function(authFactory)
                            {
                                return authFactory.proccessNoAuth();
                            }
                        }
                    })
            /*
             *ruta por defecto
             */
            .otherwise({reditrectTo: "/"});
});


//****************lógica del registro y el formulario de login*********************************////

//controlador authController, controla toda la lógica de registro, login y restricciones
//relacionadas con los usuarios
app.controller("authController", function($scope, $location, authFactory)
{
    //campos del formulario login y registro, dependiendo de que formulario sea
    if ($location.path() === "/login")
    {
        $scope.formTitle = "Formulario de login";
        $scope.formAction = "Login";
        $scope.formSecondButton = "Ir al formulario de registro";
    }
    else
    {
        $scope.formTitle = "Formulario de registro";
        $scope.formAction = "Registro";
        $scope.formSecondButton = "Ir al formulario de login";
    }

    //función redirect, al pulsar el segundo botón de los formularios de 
    //registro login, si estamos en login redirige al registro y viceversa
    $scope.redirect = function()
    {
        if ($location.path() === "/login")
        {
            $location.path('register');
        }
        else
        {
            $location.path('login');
        }
    }

    //función que ejecuta el registro y login de usuarios haciendo uso
    //de la factoria authFactory, pasamos un objeto que contiene el username y password
    //que han introducido en el formulario
    $scope.actionAuth = function(user)
    {
        //si ejecutamos el formulario de login
        if ($location.path() === "/login")
        {
            authFactory.login(user);
        }
        else
        {
            authFactory.register(user);
        }
    }
});

//factoria para procesar el login y el registro de usuarios
app.factory("authFactory", function($http, $location, sesionesControl)
{
    return{
        //logueamos a los usuarios
        login: function(user)
        {
            return $http({
                url: 'blog/authUser',
                method: "POST",
                data: "username=" + user.username + "&password=" + user.password + "&auth=login",
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(data)
            {
                if (data.respuesta == "success")
                {
                    //creamos la sesión con el username y el id del usuario
                    sesionesControl.set("username", user.username);
                    sesionesControl.set("user_id", data.user_id);
                    //mandamos al dashboard
                    $location.path("/dashboard");
                }
                else
                {
                    alert("El email o el password introducidos son incorrectos, inténtalo de nuevo.");
                }
            }).error(function()
            {
                alert("Error, inténtalo de nuevo.");
            })
        },
        //comprueba si la sesión existe
        isLoggedIn: function()
        {
            return sesionesControl.get("username");
        },
        //comprobamos la lógica de acceso a las zonas del blog de forma sencilla
        proccessAuth: function()
        {
            if (this.isLoggedIn())
            {
                $location.path("/dashboard");
            }
        },
        //comprobamos la lógica de acceso a las zonas del blog de forma sencilla
        proccessNoAuth: function()
        {
            if (!this.isLoggedIn())
            {
                $location.path("/login");
            }
        },
        //registramos al usuario
        register: function(user)
        {
            //simple validación del formulario
            if (user.username.length < 2)
            {
                alert("El usuario no puede tener menos de 2 carácteres");
                return;
            }
            else if (user.password.length < 6)
            {
                alert("El password no puede tener menos de 6 carácteres");
                return;
            }

            //si todo está bien procesamos el registro
            return $http({
                url: 'blog/authUser',
                method: "POST",
                data: "username=" + user.username + "&password=" + user.password + "&auth=register",
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(data)
            {
                if (data.respuesta == "success")
                {
                    //creamos la sesión con el email del usuario
                    alert("El registro ha sido procesado correctamente");
                    //mandamos al login para iniciar sesión
                    $location.path("/login");
                }
                else
                {
                    alert("Ha ocurrido un error, inténtalo de nuevo.");
                }
            }).error(function()
            {
                alert("Error, inténtalo de nuevo.");
            })
        }
    }
});

//factoria para guardar y eliminar sesiones con sessionStorage
app.factory("sesionesControl", function() {
    return {
        //obtenemos una sesión //getter
        get: function(key)
        {
            return sessionStorage.getItem(key)
        },
        //creamos una sesión //setter
        set: function(key, val)
        {
            return sessionStorage.setItem(key, val)
        },
        //limpiamos una sesión
        unset: function(key)
        {
            return sessionStorage.removeItem(key)
        },
        clear: function(key)
        {
            return sessionStorage.clear()
        }
    }
});
//*************************final lógica auth***********************************************///


//************************lógica de la zona del blog************************************************////

//controlador dashboardController, para mostrar todos los posts
app.controller("dashboardController", function($scope, $routeParams, $route, sesionesControl, blogFactory)
{
    //aquí guardaremos todos los posts
    $scope.allPosts = [];
    blogFactory.getAllPosts().success(function(data)
    {
        if (!Object.keys(data).length)
        {
            $scope.response = "empty";
            $scope.allPosts = [];
        }
        else
        {
            $scope.response = "filled";
            $scope.allPosts = data;
        }
    });

    //mandamos el nombre del usuario
    $scope.userLogued = sesionesControl.get("username");
    $scope.userIdLogued = sesionesControl.get("user_id");

    //eliminamos un post por su id cuando el usuario pulsa en eliminar
    $scope.removePost = function(id)
    {
        blogFactory.removePost(id).success(function(data)
        {
            //route.reload refresca el contenido de la página actual sin actualizar
            $route.reload();
        });
    }

    //hacemos logout al usuario
    $scope.logout = function()
    {
        //eliminamos todas las sesiones
        sesionesControl.clear();
        //refrescamos con reload, al ver que no existen las sesiones
        //somo enviados al login
        $route.reload();
    }

});

//controlador newPostController, para crear posts
app.controller("newPostController", function($scope, $location, blogFactory)
{
    //al pulsar el usuario en crear post llamamos al método addPost de la 
    //factoria blogFactory pasando un objeto que contiene los datos del form
    $scope.addPost = function(post)
    {
        blogFactory.addPost(post).success(function(data)
        {
            $location.path("/dashboard");
        });
    }
});

//controlador editPostController, para editar un post
app.controller("editPostController", function($scope, $routeParams, $route, $location, blogFactory)
{
    //obtenemos un post para editar
    $scope.post = [];
    blogFactory.getOnePost($routeParams.id).success(function(data)
    {
        //si el post no existe o no es nuestro mandamos al dashboard
        if (!Object.keys(data).length)
        {
            $location.path("/dashboard");
        }
        else
        {
            //en otro caso devolvemos los datos
            $scope.post = data;
        }
    });

    //editamos ul post cuando el usuario pulsa en editar
    //post contiene un objeto con los datos de ese post
    $scope.editPost = function(post)
    {
        blogFactory.editPost(post).success(function(data)
        {
            //route.reload refresca el contenido de la página actual sin actualizar
            $route.reload();
        });
    }
});
//*************************final lógica del blog***********************************************///

//***************Factoria para todo el trabajo relacionado con los posts del blog*************////
app.factory("blogFactory", function($http, $location, sesionesControl)
{
    return{
        //obtenemos todos los posts
        getAllPosts: function()
        {
            return $http({
                url: 'blog/getAllPosts',
                method: 'GET'
            });
        },
        //obtenemos todos los posts de un usuario
        getMyPosts: function()
        {
            return $http({
                url: 'blog/getAllPosts/' + sesionesControl.get("user_id"),
                method: 'GET'
            });
        },
        //obtenemos un post por su id
        getOnePost: function(id)
        {
            return $http({
                url: 'blog/getAllPosts/' + sesionesControl.get("user_id") + "/" + id,
                method: 'GET'
            });
        },
        //creamos un  post
        addPost: function(post)
        {
            return $http({
                url: 'blog/newPost',
                method: 'POST',
                data: "user_id=" + sesionesControl.get("user_id") + "&title=" + post.title + "&content=" + post.content,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        },
        //editamos un post
        editPost: function(post)
        {
            return $http({
                url: 'blog/editPost',
                method: 'POST',
                data: "id=" + post.id + "&title=" + post.title + "&content=" + post.content,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        },
        //eliminamos un post
        removePost: function(id)
        {
            return $http({
                url: 'blog/deletePost/' + id,
                method: 'GET'
            });
        }
    }
});