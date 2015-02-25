<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Ciudades extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model( 'ciudades_model' );
	}
	
	public function index() {
		$data['departamentos'] = $this->ciudades_model->departamentos();
		$this->load->view( 'ciudades_view', $data );
	}
	
	public function llena_municipios() {
		if( $this->input->post( 'departamento' ) ) {
			$codigo_departamento = $this->input->get_post( 'departamento' );
			$municipios = $this->ciudades_model->municipios( $codigo_departamento );
			foreach( $municipios as $fila ) {
				echo '<option value="'.$fila->codigo_municipio.'">'.$fila->nombre_municipio.'</option>';
			}
		}
	}
}