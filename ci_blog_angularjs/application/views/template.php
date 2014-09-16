<!DOCTYPE html>
<!--le decimos a nuestra página que vamos a utilizar el módulo app que hemos creado-->
<html ng-app="app">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Blog con AngularJS y Codeigniter</title>
  <link rel="stylesheet"  href="<?php echo base_url() ?>css/normalize.css"  media="screen" />
  <link rel="stylesheet"  href="<?php echo base_url() ?>css/foundation.min.css" media="screen" />
  <!--cdn con la version 1.2.4 de angular.js-->
  <script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js"></script>
  <!--cdn con el modulo ngRoute de angular-->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
  <!--archivo app.js, donde hemos definido nuestro modulo app-->
  <script type='text/javascript' src="<?php echo base_url() ?>js/app.js"></script>
</head>
    <body>
      <!--directiva ng-view, aquí cargara todo el contenido-->
        <div ng-view></div>
        hola
    </body>
</html>