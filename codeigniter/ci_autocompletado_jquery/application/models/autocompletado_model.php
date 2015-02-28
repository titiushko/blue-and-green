<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autocompletado_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	
	public function buscar_departamento($nombre_departamento) {
		$departamentos = $this->db->select('nombre_departamento')->like('LOWER(nombre_departamento)', strtolower($nombre_departamento), 'after')->get('departamentos');
		if($departamentos->num_rows() > 0) {
			return $departamentos->result();
		}
		else{
			return FALSE;
		}
	}
	
	function lista_municipios(){
		$lista_municipios[''] = '';
		$municipios = $this->db->select('codigo_municipio, nombre_municipio')->order_by('nombre_municipio', 'asc')->get('municipios');
		foreach($municipios->result() as $municipio){
			$lista_municipios[$municipio->codigo_municipio] = $municipio->nombre_municipio;
		}
		return $lista_municipios;
	}
	
	public function buscar_municipios($nombre_departamento) {
		$municipios = $this->db->join('departamentos d', 'm.codigo_departamento = d.codigo_departamento', 'inner')
							   ->where('nombre_departamento', $nombre_departamento)
							   ->order_by('nombre_municipio', 'asc')
							   ->get('municipios m');
		if($municipios->num_rows() > 0) {
			return $municipios->result();
		}
	}
}

/* End of file autocompletado_model.php */
/* Location: ./application/models/autocompletado_model.php */