<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('bold') ) {
	function bold($cadena) {
		return '<b>'.$cadena.'</b>';
	}
}

if ( ! function_exists('div') ) {
	function div($data = '', $attributes = '') {
		$attributes = ($attributes != '') ? ' '.$attributes : $attributes;
		return "<div".$attributes.">".$data."</div>";
	}
}

if ( ! function_exists('p') ) {
	function p($data = '', $attributes = '') {
		$attributes = ($attributes != '') ? ' '.$attributes : $attributes;
		return "<p".$attributes.">".$data."</p>";
	}
}

/* End of file MY_html_helper.php */
/* Location: ./application/helpers/MY_html_helper.php */