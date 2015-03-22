<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autocompletado extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('autocompletado_model');
	}
	
	public function index() {
		$this->load->view('autocompletado_view', array('titulo' => 'Autocompletado con jQuery y CodeIgniter',
													   'lista_municipios' => $this->autocompletado_model->lista_municipios(),
													   'lista_departamentos' => $this->autocompletado_model->lista_departamentos()));
	}
	
	public function autocompletar_departamento() {
		if($this->input->is_ajax_request() && $this->input->post('nombre_departamento')) {
			$nombre_departamento = $this->security->xss_clean($this->input->post('nombre_departamento'));
			$departamentos = $this->autocompletado_model->buscar_departamento($nombre_departamento);
			if($departamentos !== FALSE) {
				echo '<div class="contenedor-departamento">';
				foreach($departamentos as $departamento) {
					echo p($departamento->nombre_departamento);
				}
				echo '</div>';
			}
		}
	}
	
	public function lista_municipios() {
		if($this->input->is_ajax_request() && $this->input->post('nombre_departamento')) {
			$nombre_departamento = $this->security->xss_clean($this->input->post('nombre_departamento'));
			$municipios = $this->autocompletado_model->buscar_municipios($nombre_departamento);
			if($municipios !== FALSE) {
				foreach($municipios as $municipio) {
					echo '<option value="'.$municipio->codigo_municipio.'">'.$municipio->nombre_municipio.'</option>';
				}
			}
		}
	}
	
	public function autocompletar_municipio() {
		if($this->input->is_ajax_request() && $this->input->post('nombre_municipio')) {
			$nombre_municipio = $this->security->xss_clean($this->input->post('nombre_municipio'));
			if($this->input->post('codigo_departamento')) {
				$codigo_departamento = $this->security->xss_clean($this->input->post('codigo_departamento'));
				$municipios = $this->autocompletado_model->buscar_municipio($nombre_municipio, $codigo_departamento);
			}
			else {
				$municipios = $this->autocompletado_model->buscar_municipio($nombre_municipio);
			}
			if($municipios !== FALSE) {
				echo '<div class="'.(count($municipios) < 4 ? 'contenedor-municipio-1' : 'contenedor-municipio-2').'">';
				foreach($municipios as $municipio) {
					echo p($municipio->nombre_municipio);
				}
				echo '</div>';
			}
		}
	}
	
	public function listado_municipios() {
		if($this->input->is_ajax_request() && $this->input->post('codigo_departamento')) {
			$codigo_departamento = $this->security->xss_clean($this->input->post('codigo_departamento'));
			$municipios = $this->autocompletado_model->listado_municipios($codigo_departamento);
			if($municipios !== FALSE) {
				echo '<div class="'.(count($municipios) < 4 ? 'contenedor-municipio-1' : 'contenedor-municipio-2').'">';
				foreach($municipios as $municipio) {
					echo p($municipio->nombre_municipio);
				}
				echo '</div>';
			}
		}
	}
}

/* End of file autocompletado.php */
/* Location: ./application/controllers/autocompletado.php */