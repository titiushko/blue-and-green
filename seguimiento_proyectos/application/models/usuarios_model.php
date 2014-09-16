<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function usuarios(){
		$query = $this->db->get('usuarios');
		return $query->result();
	}
	
	function usuario($codigo_usuario){
		$query = $this->db->where('codigo_usuario', $codigo_usuario);
		$query = $this->db->get('usuarios');
		return $query->result();
	}
	
	function agregar($insert_usuario){
		$this->db->insert('usuarios', $insert_usuario);
		return $this->db->insert_id();
	}
	
	function eliminar($codigo_usuario){
		$this->db->where('codigo_usuario', $codigo_usuario);
		$this->db->delete('usuarios');
	}
	
	function modificar($data, $codigo_usuario){
		$this->db->where('codigo_usuario', $codigo_usuario);
		$this->db->update('usuarios', $data);
	}
}

/* End of file usuarios_model.php */
/* Location: ./application/models/usuarios_model.php */