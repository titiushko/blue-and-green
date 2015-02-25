<?php
class Mapas extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this -> load -> helper(array('form', 'url'));
		
		//Carga helper de formulario y de url para toda la clase
	}
	
	public function index()
	{
		$data = array();
		$this -> load -> library('pagination'); // Para paginar resultados
		$this -> load -> model('mapa'); // modelo mapa

		$per_page = 5;
		$data['marcasTotal'] = $this -> mapa -> cuentaMarcas();
		
        $total = $this -> mapa -> cuentaMarcas();
		$resMarcas = $this -> mapa -> marcasQuery($per_page, (int)$this -> uri -> segment(3)); // Query para el listado de resultados
		$marcas = array();
		if($total >= 1)
		{
			foreach($resMarcas AS $gmarker)
			{
				$marcas[] = array(
				'idMarca' => $gmarker -> id,
				'nombreMarca' => $gmarker -> nombre,
				'direccionMarca' => $gmarker -> direccion,
				'latMarca' => $gmarker -> lat,
				'lngMarca' => $gmarker -> lng,
				'tipoMarca' => $gmarker -> tipo,
				'imagenMarca' => $gmarker -> imagen     
				);
				
			}
			
			$config['base_url'] = 'http://localhost/ejemplo/index.php/mapas/index/';
            $config['total_rows'] = $total;
            $config['per_page'] = $per_page;
             $this -> pagination -> initialize($config);
             
            if($total == 1)
            {
            	$data['conMarcas'] = 'Existe ' . $total . ' marca registrada  en base de datos.';
            	$data['sinMarcas']  = '';
            }
            else
            {
            	$data['conMarcas'] = 'Existen ' . $total . ' marcas registradas en base de datos.';
            	$data['sinMarcas']  = '';
            }
		}
		else
		{
			$data['sinMarcas']  = 'Actualmente no existen marcas registradas.';
			$data['conMarcas'] = '';
		}
		$data['marcas'] = $marcas;
		$this -> load -> view('mapas', $data);
	}
	
	function nuevaMarca()
	{
		// vista formulario
		$data['error'] = '';
		$data['procede'] =
		$this -> load -> view('mapaForm', $data);
	}
	
	function guardaMarca()
	{
		// recibe NO vista
		
         $data = array();
         $this -> load -> model ('mapa');
         $nombre = $this -> input -> post('nombre');
         $direccion = $this -> input -> post('direccion');
         $lat = $this -> input -> post('x');
         $lng = $this -> input -> post('y');
 
         $this -> load -> library('form_validation');
         $this -> form_validation -> set_rules('nombre', 'nombre', 'required');
         $this -> form_validation -> set_rules('x', 'x', 'required');
         $this -> form_validation -> set_rules('y', 'y', 'required');
 
         if($this -> form_validation -> run() == FALSE)
         {
            $data['error'] = 'Marcados con <span style="color: #900;">*</span> son obligatorios.<br>';
            $this -> load -> view('mapaForm', $data);
         }
         else
         {        	
            $datosNuevaMarca = array(
            'nombre' => $nombre,
            'lat' => $lng,
            'lng' => $lat,
            'direccion' => $direccion
            );
 
            $this -> mapa -> guardaMarca($datosNuevaMarca);// PARA HACER EL INSERT PRIMERO CREAMOS EL ARREGLO ASOCIATIVO QUE TENDRA LOS DATOS A INCLUIR EN EL INSERT
            $data['procede'] = 1;
            $this -> load -> view('mapaForm', $data);
         }
         // redirect('admin/listado', 'refresh');
		
		
		
	}
}
?>