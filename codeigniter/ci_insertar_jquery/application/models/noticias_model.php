<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}
	
	public function noticias($etiqueta_noticia = FALSE) {
		if ($etiqueta_noticia === FALSE) {
			$query = $this->db->get('noticias');
			return $query->result_array();
		}
		$query = $this->db->get_where('noticias', array('etiqueta_noticia' => $etiqueta_noticia));
		return $query->row_array();
	}

	public function agregar_noticia($noticia) {
		return $this->db->insert('noticias', $noticia);
	}
}

/* End of file noticias_model.php */
/* Location: ./application/models/noticias_model.php */