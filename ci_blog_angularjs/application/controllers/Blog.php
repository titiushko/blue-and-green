<?php

defined("BASEPATH" or die("El acceso al script no está permitido"));

/*
 * clase para hacer de puente entre angularjs y codeigniter
 */

class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("blog_model");
    }

    //en el index del controlador simplemente cargamos la vista template, 
    //que es la que tiene toda la funcionalidad gracias a ng-view
    public function index() {
        $this->load->view("template");
    }

    //función que registra y loguea usuarios
    public function authUser() {
        if ($this->input->post("username")) {
            $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');

            //si se están registrando utilizamos is_unique para que no se repita el nombre
            if ($this->input->post("auth") === "register") {
                $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean|is_unique[users.username]');
            } else {
                $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
            }

            if ($this->form_validation->run() === false) {
                echo json_encode(array("respuesta" => "failedform"));
            } else {
                $username = $this->input->post("username");
                $password = $this->input->post("password");
                $auth = $this->input->post("auth");

                $authUser = $this->blog_model->authUser($username, $password, $auth);

                if ($authUser !== false) {
                    if ($auth === "login") {
                        echo json_encode(array("respuesta" => "success", "user_id" => $authUser));
                    } else {
                        echo json_encode(array("respuesta" => "success"));
                    }
                } else {
                    echo json_encode(array("respuesta" => "failedProcess"));
                }
            }
        } else {
            echo json_encode(array("respuesta" => "failederror"));
        }
    }

    //obtenemos todos los posts, todos por su id de usuario o por su idpost
    public function getAllPosts($user_id = false, $post_id = false) {
        if ($user_id === false && $post_id === false) {
            echo json_encode($this->blog_model->allPosts());
        } else if ($user_id !== false && $post_id === false) {
            echo json_encode($this->blog_model->allMyPosts($user_id));
        } else {
            echo json_encode($this->blog_model->getOnePost($user_id, $post_id));
        }
    }

    //eliminamos un post por su id
    public function deletePost($id) {
        if (!$id || !is_numeric($id)) {
            echo json_encode(array("respuesta" => "error"));
        } else {
            if ($this->blog_model->deletePost($id)) {
                echo json_encode(array("respuesta" => "correcto"));
            }
        }
    }

    //editamos un post
    public function editPost() {
        if ($this->input->post("title") && $this->input->post("content") && $this->input->post("id")) {
            $this->form_validation->set_rules('title', 'title', 'trim|required|xss_clean');
            $this->form_validation->set_rules('content', 'content', 'trim|required|xss_clean');

            if ($this->form_validation->run() == false) {
                echo json_encode(array("respuesta" => "failedform"));
            } else {
                $title = $this->input->post("title");
                $content = $this->input->post("content");
                $id = $this->input->post("id");

                $updatePost = $this->blog_model->updatePost($id, $title, $content);

                if ($updatePost) {
                    echo json_encode(array("respuesta" => "success"));
                } else {
                    echo json_encode(array("respuesta" => "failedProcess"));
                }
            }
        } else {
            echo json_encode(array("respuesta" => "failederror"));
        }
    }

    //creamos un nuevo post
    public function newPost() {
        if ($this->input->post("title") && $this->input->post("content") && $this->input->post("user_id")) {
            $this->form_validation->set_rules('title', 'title', 'trim|required|xss_clean');
            $this->form_validation->set_rules('content', 'content', 'trim|required|xss_clean');
            $this->form_validation->set_rules('user_id', 'user_id', 'trim|required|xss_clean');

            if ($this->form_validation->run() == false) {
                echo json_encode(array("respuesta" => "failedform"));
            } else {
                $title = $this->input->post("title");
                $content = $this->input->post("content");
                $user_id = $this->input->post("user_id");

                $addPost = $this->blog_model->newPost($user_id, $title, $content);

                if ($addPost) {
                    echo json_encode(array("respuesta" => "success"));
                } else {
                    echo json_encode(array("respuesta" => "failedProcess"));
                }
            }
        } else {
            echo json_encode(array("respuesta" => "failederror"));
        }
    }

}

//Location: application/controllers/BlogController.php