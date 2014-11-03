<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Consultas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('consultas_model');
        $this->load->helper('url');
        $this->load->database('default');
    }
    public function index()
    {
        $data['titulo'] = 'Consultas a la base de datos con codeigniter';

        //obtenemos los datos y entradas de un único usuario dependiendo
        //del argumento que le pasemos a la consulta, en este caso del usuario
        //con id = 1
        $data['user_entrys'] = $this->consultas_model->users_entrys(1);

        //obtenemos los datos y entradas de todos los usuarios al no pasarle
        //ningún argumento a la consulta
        $data['users_entrys'] = $this->consultas_model->users_entrys();

        //obtenemos los comentarios del usuario cuya id le pasemos como argumento
        //a la consulta, en este caso los comentarios con id = 1
        $data['user_comments'] = $this->consultas_model->users_coments(1);

        //obtenemos los comentarios de todos los usuarios
        $data['users_comments'] = $this->consultas_model->users_coments();

        //obtenemos todos los usuarios con id mayor o igual al argumento que le pasamos
        $data['cadena_encadenada'] = $this->consultas_model->consulta_encadendada(1);

        //obtenemos los usuarios que el username empiece con I al utilizar el
        //comodín con after
        $data['search_after_users'] = $this->consultas_model->search_users('I','after');

         //se puede utilizar before donde buscaríamos los usuarios
        //que su username acabe con el primer argumento que le pasemos
        $data['search_before_users'] = $this->consultas_model->search_users('5','before');

        //contamos los registros de la tabla que pasemos como argumento
        $data['count_data'] = $this->consultas_model->count_results('users');

        //hacemos uso de get_where haciendo toda la consulta en la misma línea y le
        //pasamos como argumento el id del usuario que queremos
        $data['consulta_get_where'] = $this->consultas_model->consulta_get_where(3);

        $this->load->view('consultas_view',$data);
    }
}
/*
 * end of application/controllers/consultas.php
 */
