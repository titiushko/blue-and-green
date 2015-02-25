<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		if(!$this->session->userdata('perfil') || $this->session->userdata('perfil') != 'administrador') {
			redirect(base_url().'login');
		}
		$datos['titulo'] = 'Bienvenido Administrador';
		$this->load->view('admin_view', $datos);
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */