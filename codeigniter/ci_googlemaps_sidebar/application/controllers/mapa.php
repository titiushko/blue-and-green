<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mapa extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('mapa_model');
	}
	
	public function index() {
		$config = array();	// creamos la configuración del mapa con un array
		$config['center'] = 'madrid, espana';	// la zona del mapa que queremos mostrar al cargar el mapa, le podemos pasar la ciudad y el país en lugar de la latitud y la longitud
		$config['zoom'] = '6';	// el zoom, que lo podemos poner en auto y de esa forma siempre mostrará todos los markers ajustando el zoom
		$config['map_type'] = 'ROADMAP';	// el tipo de mapa, en el pdf podéis ver más opciones
		$config['map_width'] = '700px';	// el ancho del mapa
		$config['map_height'] = '600px';	// el alto del mapa
		$this->googlemaps->initialize($config);	// inicializamos la configuración del mapa
		$markers = $this->mapa_model->get_markers();	// hacemos la consulta al modelo para pedirle la posición de los markers y el infowindow
		foreach($markers as $info_marker) {
			$marker = array();
			$marker ['animation'] = 'DROP';	// podemos elegir DROP o BOUNCE
			$marker ['position'] = $info_marker->pos_y.','.$info_marker->pos_x;	// posición de los markers
			$marker ['infowindow_content'] = $info_marker->infowindow;	// infowindow de los markers(ventana de información)
			$marker['id'] = $info_marker->id;	// la id del marker
			$this->googlemaps->add_marker($marker);
			//$marker ['icon'] = base_url().'imagenes/'.$fila->imagen;	// podemos colocar iconos personalizados así de fácil
			//$marker['draggable'] = TRUE;	// si queremos que se pueda arrastrar el marker
			// si queremos darle una id, muy útil
		}
		$data['datos'] = $this->mapa_model->get_markers();	// en $data['datos'tenemos la información de cada marker para poder utilizarlo en el sidebar en nuestra vista mapa_view
		$data['map'] = $this->googlemaps->create_map();	// en $data['map'] tenemos ya creado nuestro mapa para llamarlo en la vista
		$this->load->view('mapa_view',$data);
	}
}