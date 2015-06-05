<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('file', 'funciones'));
		$this->i = 0;
	}
	
	public function index(){
		$informacion_directorio = get_dir_file_info('files');
		//foreach($informacion_directorio as $valores) if(!empty($valores['name'])) echo $valores['name'].' | '.$valores['relative_path'].'<br>';
		//print_r($informacion_directorio);
		
		if(count($informacion_directorio) != 1){
			$directorios = $this->_directorios($informacion_directorio);
			//foreach($directorios as $valores) echo $valores['nombre'].' | '.$valores['ruta'].'<br>';
			//print_r($directorios);
			
			$this->load->view('main_view', array('directorios' => $directorios));
			$this->_resultado($directorios);
		}
		else{
			$this->load->view('main_view', array('directorios' => array(0 => array('nombre' => 'nombre', 'ruta' => 'ruta', 'tipo' => 'tipo'))));
		}
		
	}
	
	private function _resultado($directorios){
		/*
										0
		carpeta-1						1
			carpeta-1-1					2
			carpeta-1-2					2
		carpeta-2						1
			carpeta-2-1					2
				carpeta-2-1-1			3
			carpeta-2-2					2
				carpeta-2-2-1			3
				carpeta-2-2-2			3
			carpeta-2-3					2
				carpeta-2-3-1			3
					carpeta-2-3-1-1		4
		*/
		$CRLF = '
';
		$contenido = '';
		$resultado = '<!DOCTYPE html>'.$CRLF.'<html>'.$CRLF.'<head>'.$CRLF.'<meta charset="utf-8">'.$CRLF.'</head>'.$CRLF.'<body>'.$CRLF;
		$nivel[0] = 0;
		$i = 1;
		foreach($directorios as $valores){
			if($valores['tipo'] == 'carpeta'){
				$nivel[$i] = substr_count($valores['ruta'], '/') + 1;
				if($nivel[$i] < $nivel[$i - 1]){
					for($j = 0; $j <= ($nivel[$i - 1] - $nivel[$i]); $j++) $resultado .= '</ul>'.$CRLF;
					$resultado .= '<ul>'.$CRLF;
				}
				elseif($nivel[$i] == $nivel[$i - 1]){
					$resultado .= '</ul>'.$CRLF;
					$resultado .= '<ul>'.$CRLF;
				}
				elseif($nivel[$i] > $nivel[$i - 1]){
					$resultado .= '<ul>'.$CRLF;
				}
				$resultado .= '<h'.$nivel[$i].'>'.$valores['nombre'].'</h'.$nivel[$i].'>'.$CRLF;
				$i++;
			}
			elseif(preg_match('/^.*\.(url)$/i', $valores['nombre'])){
				$contenido = trim(file($valores['ruta'].'/'.$valores['nombre'])[1]);
				$resultado .= '<li><a href="'.substr($contenido, 4).'">'.utf8(substr($valores['nombre'], 0, strlen($valores['nombre']) - 4)).'</a><br/><br/>'.$CRLF;
			}
		}
		$resultado .= '</body>'.$CRLF.'</html>';
		return write_file('files/_resultado/_resultado.html', $resultado, 'w');
	}
	
	private function _directorios($directorio){
		foreach($directorio as $valores => $registro){
			$rutas[$valores] = $registro['relative_path'];
		}
		array_multisort($rutas, SORT_ASC, $directorio);
		
		foreach($directorio as $valores){
			if(!empty($valores['name']) && $valores['name'] != '_resultado'){
				$directorios[$this->i]['nombre'] = $valores['name'];
				$directorios[$this->i]['ruta'] = $valores['relative_path'];
				//echo '<b>'.$directorios[$i]['nombre'].' | '.$directorios[$i]['ruta'].'</b><br>';
				$permisos = get_file_info($valores['relative_path'].'/'.$valores['name'], 'fileperms')['fileperms'];
				if(($permisos & 0x4000) == 0x4000){
					$directorios[$this->i]['tipo'] = 'carpeta';
					$aux = $this->_directorios(get_dir_file_info($valores['relative_path'].'/'.$valores['name']));
					$directorios = array_merge($directorios, $aux);
				}
				else{
					$directorios[$this->i]['tipo'] = 'archivo';
				}
				$this->i++;
			}
		}
		return $directorios;
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */