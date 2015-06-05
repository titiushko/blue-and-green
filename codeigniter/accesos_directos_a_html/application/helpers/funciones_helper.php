<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('utf8')){
	function utf8($cadena){
		return htmlentities($cadena, ENT_COMPAT, 'ISO-8859-1');
	}
}

if(!function_exists('acentos')){
	function acentos($cadena){
		$cadena = trim($cadena);
		$cadena = str_replace(
				array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
				array('&aacute;', '&aacute;', '&aacute;', '&aacute;', '&aacute;', '&Aacute;', '&Aacute;', '&Aacute;', '&Aacute;'),
				$cadena
		);
		$cadena = str_replace(
				array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
				array('&eacute;', '&eacute;', '&eacute;', '&eacute;', '&Eacute;', '&Eacute;', '&Eacute;', '&Eacute;'),
				$cadena
		);
		$cadena = str_replace(
				array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
				array('&iacute;', '&iacute;', '&iacute;', '&iacute;', '&Iacute;', '&Iacute;', '&Iacute;', '&Iacute;'),
				$cadena
		);
		$cadena = str_replace(
				array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
				array('&oacute;', '&oacute;', '&oacute;', '&oacute;', '&Oacute;', '&Oacute;', '&Oacute;', '&Oacute;'),
				$cadena
		);
		$cadena = str_replace(
				array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
				array('&uacute;', '&uacute;', '&uacute;', '&uacute;', '&Uacute;', '&Uacute;', '&Uacute;', '&Uacute;'),
				$cadena
		);
		$cadena = str_replace(
				array('ñ', 'Ñ', 'ç', 'Ç'),
				array('&ntilde;', '&Ntilde;', 'c', 'C'),
				$cadena
		);
		// $cadena = str_replace(' ', '_', $cadena);
		$cadena = str_replace('&', 'y', $cadena);
		/*
		$cadena = str_replace(
				array("\\", "¨", "º", "~", "#", "@", "|", "!", "\"", "·", "$", "%", "/", "(", ")", "?", "'", "¡", "¿", "[", "^", "`", "]", "+", "}", "{", "¨", "´", ">", "< ", ";", ":"),
				'',
				$cadena
		);
		*/
		return $cadena;
	}
}

/* End of file funciones_helper.php */
/* Location: ./application/helpers/funciones_helper.php */