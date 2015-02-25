<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mapa_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function get_markers() {
		$markers = $this->db->get('mapa');
		if($markers->num_rows()>0) {
			return $markers->result();
		}
	}
}