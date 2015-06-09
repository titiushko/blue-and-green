<?php
/*
 * Facturacion en lenguaje PHP
 * Copyright (C) 2008  Daniel Ceillán
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with GNU gv; see the file COPYING.  If not, write to
 * the Free Software Foundation, Inc., 59 Temple Place - Suite 330,
 * Boston, MA 02111-1307, USA.
 *
 *   Author: Daniel Ceillán           Web Developer
 * Internet: http://classmdp.com.ar   http://proyectohelado.com.ar
 *   E-mail(Pay-pal): codigodaniel@gmail.com 
 *  
 * If you contrib or improve this software, please dont remove my name, add yours as a contributor. 
 * 
 * Contributors or this file:
 * 
 * 
 */
class FacturasController extends AppController 
{
	var $Modelo = 'Factura';
	var $name = 'Facturas';
	var $scaffold;
	var $error = '';
	var $helpers = array('Html','Js');//,'pdf');

	function add($ajax = null, $esResumen = 0)
	{
		$this->redirect("facturas/edit/0/".$ajax);
	}
	/**/
	function edit($id = null, $ajax = null, $esResumen = 0)
	{
		if($ajax)$this->layout = 'ajax';
		$camposFacturaRequeridos = array( 
		'numero',
		'total');		
		//ver($this->Factura->read(null,1));
		$this->set('post', $this->data);
		$this->set('esResumen', $esResumen);
		$condicionesIva = new Condicioniva();
		$this->set('condiciones', $condicionesIva->findAll());
		$this->set('error', null);
		if($id) $this->set('accion','editar');
		else 		$this->set('accion','agregar');

		if(!$esResumen)
		{
			$this->set('facturas',$this->Factura->findAll());
		}else
		{
			$this->set('facturas',null);
		}
		
	   if(empty($this->data))
	   	{
	   		
	   		//si estoy editando
	   		if($id)
	   		{
			      $data = $this->Factura->read(null, $id);
			      $this->set('elementos', $data);
	   		}else
	   		{
	   			//si estoy agregando
	   			$this->set('elementos', null);
	   		}
	   }else
	   {
	   	//grabando
	  		$this->cleanUpFields();
	  		$grabar = true;
	  		

//ver($_POST);
	  		
	  		$fecha = $_POST['fecha'];
			$this->data[$this->Modelo]['fecha'] = substr($fecha,6,4).substr($fecha,3,2).substr($fecha,0,2);
			
	   	  	foreach($camposFacturaRequeridos as $campito)
	  		{
	  			if(!$this->data[$this->Modelo][$campito]) $grabar = false;
	  			
	  		}


	      if($grabar)
	      {
	  		 if($this->Factura->save($this->data))
	  		 {
		  		 //$this->Venta->data = $this->data;
		  		 //$this->Venta->asignarACobros();
				//$cliente = new Cliente();
				//$cliente->actualizarCuentaCorriente($this->data['Venta']['clienteid']);
	  		 }
	  		 
	  		 $this->redirect('clientes');
	         //$this->redirect('ventas/index');
	      }else
	      {
	         $data = $this->data;
	         $this->set('elementos', $data);
	      }
	   }
	}	
	
	function delete($id = 0)
	{
		//$this->redirect('/localidades');
	}
	
	function nueva($ajax = null,$idCliente = 0, $esResumen = 0)
	{
	
		if($ajax)$this->layout = 'ajax';
		$camposFactura = array( 
		'numero', 
		'fecha', 
		'nombre', 
		'direccion', 
		'localidad', 
		'condicion_iva', 
		'cuit', 
		'condicion_venta', 
		'bidon8', 
		'bidon8p', 
		'bidon8t', 
		'bidon10', 
		'bidon10p', 
		'bidon10t', 
		'bidon20', 
		'bidon20p', 
		'bidon20t', 
		'dispenser', 
		'dispenserp', 
		'dispensert', 
		'vasosx100', 
		'vasosx100p', 
		'vasosx100t', 
		'sub_total', 
		'porcentaje_IVA', 
		'IVA', 
		'monto_IVA',
		'total');

		$camposFacturaRequeridos = array( 
		'numero');
		foreach($camposFactura as $campo)
		{
			if(!isset($this->data[$this->Modelo][$campo]))
			{
				$this->data[$this->Modelo][$campo] = '';
			}
		}
		
		if(!$esResumen)
		{
			$this->set('facturas',$this->Factura->findAll());
		}else
		{
			$this->set('facturas',null);
		}
		
		
		$this->set('padre',$this->getCliente($idCliente));		
		$this->set('elementos',null);
		
		$this->set('esResumen',$esResumen);
		//ventas posteadas, es un arreglo con todos los datos
		
		$this->set('ventas',$this->ventas($esResumen, $idCliente));
		$this->parseFecha();
		$this->set('error', null);
		//ver($this->data);
		$this->set('post', $this->data);
		
		
	   	if(empty($this->data))
	   	{
	   		
	    }else
	    {
	   	//grabando
	  		
	  		$grabar = true;
	  		

	  		foreach($camposFacturaRequeridos as $campito)
	  		{
	  			if(!$this->data[$this->Modelo][$campito]) $grabar = false;
	  			
	  		}

	      if($grabar)
	      {
	  		 if($this->Factura->save($this->data))
	  		 {
		  		$this->Factura->data = $this->data;
		  		$this->Factura->asignarAVentas();
	         	$this->redirect('clientes');
	  		 }
	         //$this->redirect('facturas/index');
	      }
	   }		
	}
	
	function ventasDeAntes($esResumen = 0)
	{
		$salida = array();
		$detalle = array();
		//procesa las ventas posteadas, devuelve un arreglo con todo
		$modelo = new Venta();
		$modelo->recursive = 2;
		if($esResumen)
		{
			$porcientoIva = 0;
		}else
		{
			$porcientoIva = $this->viewVars['padre']['Condicioniva']['porcentaje'];
		}
		//ver($this);
		//if(isset($this->data['Venta'])) $this->data = null;

		if(isset($this->params['form']['data']['Venta'])) 
		{
			$ventas = $this->params['form']['data']['Venta'];
			foreach($ventas as $ventaid)
			{
				$venta = $modelo->read(null,$ventaid);
				array_push($salida, $venta);
/*
    [Venta] => Array
        (
            [id] => 3
            [nrofactura] => 
            [fecha] => 2008-02-12
            [clienteid] => 2
            [total] => 104.60
            [debe] => 104.60
            [bidon8] => 3
            [bidon10] => 0
            [bidon20] => 1
            [dispenser] => 1
            [vasosx100] => 3
            [descuento] => 0
            [bidon8p] => 4.50
            [bidon10p] => 0.00
            [bidon20p] => 18.00
            [dispenserp] => 59.00
            [vasosx100p] => 4.70
            [ivaincluido] => 1
            [decontado] => 0
        )
*/
				
			}
		}
		$campos = array(
		'bidon8',
		'bidon10',
		'bidon20',
		'dispenser',
		'vasosx100',
		);
		$detalle = array();
		//si es la primera vez que entro
		if(!$this->data['Factura']['sub_total'])
		{
			foreach($salida as $venta)
			{
				foreach($campos as $campito)
				{
					$precio = $venta['Venta'][$campito.'p'];
					$this->data['Factura'][$campito] += $venta['Venta'][$campito];
					if($venta['Venta']['descuento'])
					{
						//calculo descuento
						$precio = $precio * (100 - $venta['Venta']['descuento']) / 100;
					}
					
					if($venta['Venta']['ivaincluido'])
					{
						//resto el iva
						$precio = $precio / ((100 + $porcientoIva) / 100);
					}
					
					
					$this->data['Factura'][$campito.'t'] += round($precio * $venta['Venta'][$campito]* 100) / 100;
					if($venta['Venta'][$campito])
					$this->data['Factura'][$campito.'p'] = round($this->data['Factura'][$campito.'t'] / $this->data['Factura'][$campito] * 100) / 100;
				}
			}
			
			foreach($campos as $campito)
			{
				$this->data['Factura']['sub_total'] += $this->data['Factura'][$campito.'t'];
			}
			$this->data['Factura']['monto_IVA'] = round($this->data['Factura']['sub_total'] * ($porcientoIva)) / 100;
			$this->data['Factura']['total'] = $this->data['Factura']['sub_total'] + $this->data['Factura']['monto_IVA'];
		}
		return $salida;
	}

	function ventas($esResumen = 0,$idPadre = 0)
	{
		$salida = array();
		$detalle = array();
		//procesa las ventas posteadas, devuelve un arreglo con todo
		$modelo = new Venta();
		$modelo->recursive = 2;
		if($esResumen)
		{
			$porcientoIva = 0;
		}else
		{
			$porcientoIva = $this->viewVars['padre']['Condicioniva']['porcentaje'];
		}
		//ver($this);
		//if(isset($this->data['Venta'])) $this->data = null;
		//$idPadre = $this->viewVars['padre']['Cliente']['id'];

//		if(isset($this->params['form']['data']['Venta'])) 
//		{
			$salida = $modelo->findAll("Venta.clienteid=".$idPadre." and Venta.nrofactura = 0  and Venta.anulado = 0 ");
			/** 
			foreach($ventas as $ventaid)
			{
				$venta = $modelo->read(null,$ventaid);
				array_push($salida, $venta);
/*
    [Venta] => Array
        (
            [id] => 3
            [nrofactura] => 
            [fecha] => 2008-02-12
            [clienteid] => 2
            [total] => 104.60
            [debe] => 104.60
            [bidon8] => 3
            [bidon10] => 0
            [bidon20] => 1
            [dispenser] => 1
            [vasosx100] => 3
            [descuento] => 0
            [bidon8p] => 4.50
            [bidon10p] => 0.00
            [bidon20p] => 18.00
            [dispenserp] => 59.00
            [vasosx100p] => 4.70
            [ivaincluido] => 1
            [decontado] => 0
        )
*
				
			}
/**/
//		}
		$campos = array(
		'bidon8',
		'bidon10',
		'bidon20',
		'dispenser',
		'vasosx100',
		);
		$detalle = array();
		//si es la primera vez que entro
		if(!$this->data['Factura']['sub_total'])
		{
			foreach($salida as $venta)
			{
				foreach($campos as $campito)
				{
					$precio = $venta['Venta'][$campito.'p'];
					$this->data['Factura'][$campito] += $venta['Venta'][$campito];
					if($venta['Venta']['descuento'])
					{
						//calculo descuento
						$precio = $precio * (100 - $venta['Venta']['descuento']) / 100;
					}
					
					if($venta['Venta']['ivaincluido'])
					{
						//resto el iva
						$precio = $precio / ((100 + $porcientoIva) / 100);
					}
					
					
					$this->data['Factura'][$campito.'t'] += round($precio * $venta['Venta'][$campito]* 100) / 100;
					if($venta['Venta'][$campito])
					$this->data['Factura'][$campito.'p'] = round($this->data['Factura'][$campito.'t'] / $this->data['Factura'][$campito] * 100) / 100;
				}
			}
			
			foreach($campos as $campito)
			{
				$this->data['Factura']['sub_total'] += $this->data['Factura'][$campito.'t'];
			}
			$this->data['Factura']['monto_IVA'] = round($this->data['Factura']['sub_total'] * ($porcientoIva)) / 100;
			$this->data['Factura']['total'] = $this->data['Factura']['sub_total'] + $this->data['Factura']['monto_IVA'];
		}
		return $salida;
	}
	
	function getCliente($id = null)
	{
		$papa = new Cliente();
		$papa->recursive = 2;
		if(!$id) $id = $this->params['form']['data']['Cliente']['id'];
		return $papa->read(null,$id);
	}
	
	function parseFecha()
	{
		$fecha = null;
  		if(isset($_POST['fecha'])) $fecha = $_POST['fecha'];
		$this->data[$this->Modelo]['fecha'] = substr($fecha,6,4).substr($fecha,3,2).substr($fecha,0,2);
	}
	
	function meses($ajax = null)
	{
		if($ajax)$this->layout = 'ajax';
		$this->set('error',null);
		$this->set('post', $this->data);
		$this->Factura->recursive = 2;
        $this->set('datos', $this->Factura->mesesIva());
        //ver($this->Factura);
	}	
	
	function ivaventas($anio = 0, $mes = 0)
	{
		
		$this->layout = 'excel';
		$this->set('error',null);
		$this->set('post', $this->data);
		$this->Factura->recursive = 2;
        $this->set('datos', $this->Factura->ivaVentas($anio, $mes));
        $this->set('fecha', ucfirst(numeroMesAString($mes)).$anio);
        //ver($this->Factura);
	}	
	function imprimir($idFactura)
	{
		$this->layout = 'impresion';
		$factura = $this->Factura->read(null,$idFactura);
		$this->set('error',null);
		$this->set('factura',$factura);
	}
	
	function anular($id)
	{
		
		$this->layout = 'ajax';
		$factura = $this->Factura->anular($id);
	    $this->redirect('clientes/view/'.$factura['Venta'][0]['clienteid'].'/a');
	}
	
	function pdf()
	{
        $this->layout = 'pdf'; //this will use the pdf.thtml layout
        $this->set('data','hello world!');
        $this->render();
	}
	
	function corregir($id, $ajax = null)
	{
		if($ajax)$this->layout = 'ajax';
		
		//campos a editar...
		$camposFactura = array( 
					'id',                    
                    'anulado',
                    'fecha',
                    'nombre',
                    'direccion',
                    'localidad',
                    'condicion_iva',
                    'cuit',
                    'condicion_venta',
                    'bidon8',
                    'bidon8p',
                    'bidon10',
                    'bidon10p', 
                    'bidon20',
                    'bidon20p',
                    'dispenser',
                    'dispenserp',
                    'vasosx100',
                    'vasosx100p',
                    'sub_total',
                    'porcentaje_IVA',
                    'monto_IVA',
                    'total',
                    'IVA',
                    'cliente_id'
					);

		$camposFacturaRequeridos = array( 
	'numero'
);
		foreach($camposFactura as $campo)
		{
			if(!isset($this->data[$this->Modelo][$campo]))
			{
				$this->data[$this->Modelo][$campo] = '';
			}
		}

		if(!isset($this->data[$this->Modelo]['numero']))
		{
			$this->data[$this->Modelo]['numero'] = '';
		}
				
		$this->set('elementos',null);
		$this->set('facturas',$this->Factura->findAll());
		
		//ventas posteadas, es un arreglo con todos los datos
		
		//ver($this->data);
		$this->set('error', null);
		//ver($this->data);
		$this->set('post', $this->data);
		$factura = $this->Factura->read(null, $id);
		$this->set('datos',$factura);
		$this->set('padre',$this->getCliente($factura['Factura']['cliente_id']));		
		$this->set('camposFactura',$camposFactura);
	   	if(empty($this->data))
	   	{
	   		
	    }else
	    {
	   	//grabando
	  		
	  		$grabar = true;
	  		

	  		foreach($camposFacturaRequeridos as $campito)
	  		{
	  			if(!$this->data[$this->Modelo][$campito]) $grabar = false;
	  		}

	      if($grabar)
	      {
	  		 if($this->Factura->save($this->data))
	  		 {
	         	$this->redirect('clientes/view/'.$factura['Factura']['cliente_id']);
	  		 }
	         //$this->redirect('facturas/index');
	      }
	   }		
	}	
}

?>