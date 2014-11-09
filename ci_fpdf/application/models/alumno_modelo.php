<?php
class Alumno_modelo extends CI_Model {
 
    function __construct()
    {
        parent::__construct();
    }
 
    /* Devuelve la lista de alumnos que se encuentran en la tabla tblalumno */
    function obtenerListaAlumnos()
    {
        $this->load->database();
        $alumnos = $this->db->get('tblalumno');
        return $alumnos->result();
    }
}