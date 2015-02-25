<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editor extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->database('default');
	}
	
	public function index() {
		if(!$this->session->userdata('perfil') || $this->session->userdata('perfil') == 'suscriptor') {
			redirect(base_url().'login');
		}
		$datos['titulo'] = 'Bienvenido de nuevo '.$this->session->userdata('perfil');
		$this->load->view('editor_view', $datos);
	}
}

/* End of file editor.php */
/* Location: ./application/controllers/editor.php */