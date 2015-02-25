<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Ciudades_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	
	public function departamentos() {
		$this->db->order_by( 'nombre_departamento', 'asc' );
		$departamento = $this->db->get( 'departamentos' );
		if( $departamento->num_rows() > 0 ) {
			return $departamento->result();
		}
	}
	
	public function municipios( $codigo_departamento ) {
		$this->db->where( 'codigo_departamento', $codigo_departamento );
		$this->db->order_by( 'nombre_municipio', 'asc' );
		$municipios = $this->db->get( 'municipios' );
		if( $municipios->num_rows() > 0 ) {
			return $municipios->result();
		}
	}
}