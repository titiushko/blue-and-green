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
							   ->where('d.nombre_departamento', $nombre_departamento)
							   ->order_by('m.nombre_municipio', 'asc')
							   ->get('municipios m');
		if($municipios->num_rows() > 0) {
			return $municipios->result();
		}
	}
	
	public function buscar_municipio($nombre_municipio, $codigo_departamento = '') {
		$municipios = $codigo_departamento != '' ? $this->db->where('codigo_departamento', $codigo_departamento) : '';
		$municipios = $this->db->select('nombre_municipio')->like('LOWER(nombre_municipio)', strtolower($nombre_municipio), 'after')->get('municipios');
		if($municipios->num_rows() > 0) {
			return $municipios->result();
		}
		else{
			return FALSE;
		}
	}
	
	function lista_departamentos(){
		$lista_departamentos[''] = '';
		$departamentos = $this->db->select('codigo_departamento, nombre_departamento')->order_by('nombre_departamento', 'asc')->get('departamentos');
		foreach($departamentos->result() as $departamento){
			$lista_departamentos[$departamento->codigo_departamento] = $departamento->nombre_departamento;
		}
		return $lista_departamentos;
	}
	
	public function buscar_departamentos($nombre_municipio) {
		$departamentos = $this->db->join('municipios m', 'd.codigo_departamento = m.codigo_departamento', 'inner')
							   ->where('m.nombre_municipio', $nombre_municipio)
							   ->order_by('d.nombre_departamento', 'asc')
							   ->get('departamentos d');
		if($departamentos->num_rows() > 0) {
			return $departamentos->result();
		}
	}
	
	public function listado_municipios($codigo_departamento) {
		$municipios = $this->db->where('codigo_departamento', $codigo_departamento)->order_by('nombre_municipio', 'asc')->get('municipios');
		if($municipios->num_rows() > 0) {
			return $municipios->result();
		}
	}
}

/* End of file autocompletado_model.php */
/* Location: ./application/models/autocompletado_model.php */