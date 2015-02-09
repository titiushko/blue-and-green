<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Suscriptor extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		if(!$this->session->userdata('perfil')) {
			redirect(base_url().'login');
		}
		$datos['titulo'] = 'Bienvenido a la web '.$this->session->userdata('perfil');
		$this->load->view('suscriptor_view', $datos);
	}
}

/* End of file suscriptor.php */
/* Location: ./application/controllers/suscriptor.php */