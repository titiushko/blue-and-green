<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paginas extends CI_Controller {
	public function index($pagina = 'inicio') {
		if ( ! file_exists('application/views/paginas/'.$pagina.'.php')) {
			show_404();	// Whoops, we don't have a pagina for that!
		}
		$datos['titulo'] = ucfirst($pagina); // Capitalize the first letter
		$this->load->view('plantillas/cabecera', $datos);
		$this->load->view('paginas/'.$pagina, $datos);
		$this->load->view('plantillas/pie', $datos);
	}
}

/* End of file paginas.php */
/* Location: ./application/controllers/paginas.php */