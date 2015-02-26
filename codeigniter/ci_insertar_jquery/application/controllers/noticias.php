<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('noticias_model');
	}
	
	public function index() {
		$datos['noticias'] = $this->noticias_model->noticias();
		$datos['titulo_noticia'] = 'Archivo de Noticias';
		$this->load->view('plantillas/cabecera', $datos);
		$this->load->view('noticias/inicio', $datos);
		$this->load->view('plantillas/pie');
	}

	public function ver_noticia($etiqueta_noticia) {
		$datos['nueva_noticia'] = $this->noticias_model->noticias($etiqueta_noticia);
		if (empty($datos['nueva_noticia'])) {
			show_404();
		}
		$datos['titulo_noticia'] = $datos['nueva_noticia']['titulo_noticia'];
		$this->load->view('plantillas/cabecera', $datos);
		$this->load->view('noticias/view', $datos);
		$this->load->view('plantillas/pie');
	}
	public function crear_noticia() {
		$this->load->helper('url');
		$noticia = array(
			'titulo_noticia'	=> $this->input->post('titulo_noticia'),
			'etiqueta_noticia'	=> url_title($this->input->post('titulo_noticia'), 'dash', TRUE),
			'texto_noticia'		=> $this->input->post('texto_noticia')
		);
		$this->noticias_model->agregar_noticia($noticia);
		echo 'Se inserto la Noticia correctamente.';
	}
	
	public function agregar_noticia() {
		$this->load->view('plantillas/cabecera');	
		$this->load->view('noticias/crear_noticia');
		$this->load->view('plantillas/pie');
	}
}

/* End of file noticias.php */
/* Location: ./application/controllers/noticias.php */