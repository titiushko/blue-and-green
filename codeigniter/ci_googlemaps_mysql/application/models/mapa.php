<?php
class Mapa extends CI_Model
{
	function marcasQuery($limit, $offset)
	{
		$this -> db -> select('*'); // SELECT * FROM
		$this -> db -> from('mapa'); // tabla mapa
		$this -> db -> limit($limit, $offset);  // Establece los limites.
		$query = $this -> db -> get(); // Obtiene resultados.
		return $query -> result(); //Retorna al controllador un arreglo con los valores del query
	}
	
	function cuentaMarcas()
	{
		return $this -> db -> count_all_results('mapa'); // Total de marcas en la tabla
	}
	
	function guardaMarca($datosNuevaMarca)
	{
		$this -> db -> insert('mapa', $datosNuevaMarca);
	}
}