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
class ComprasController extends AppController 
{
	var $name = 'Compras';
	var $Modelo = 'Compra';
	var $scaffold;
	var $error = '';
	var $helpers = array('Html','Js');
	/**/
	function add($ajax = null, $idPadre= null)
	{
		//ver($idPadre);
		//cargo el padre
		
		$this->redirect("compras/edit/0/".$ajax."/".$idPadre);
		
	}
	/**/
	function edit($id = null, $ajax = null, $idPadre= null)
	{
		if($ajax)$this->layout = 'ajax';
		//ver($idPadre);

		$this->set('padre',$this->getPadre($idPadre));
		
		
		
		$this->set('error', null);
		if($id) $this->set('accion','editar');
		else 		$this->set('accion','agregar');
		$this->set('idPadre', $idPadre);
		
	   if(empty($this->data))
	   	{
	   		
	   		//si estoy editando
	   		if($id)
	   		{
	   			
	      $this->Compra->id = $id;	
	      $this->data = $this->Compra->read();
//	      $data = $this->Compra->read(null, $id);
	      $this->set('elementos', $this->data);
	      
	      //inicializo los campos relacionados

	      //constryo un array de localidades
	      //$this->set('articulos', $this->Venta->Articulo->generateList());
	   			
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
	  		if(!$this->data[$this->Modelo]['decontado'])
	  		$this->data[$this->Modelo]['debe'] = $this->data[$this->Modelo]['total'];
	  		else
	  		$this->data[$this->Modelo]['debe'] = 0;
	  		
	  		$fecha = $_POST['fecha'];
			$this->data[$this->Modelo]['fecha'] = substr($fecha,6,4).substr($fecha,3,2).substr($fecha,0,2);
			

	

	      if($grabar)
	      {
	  		 if($this->Compra->save($this->data))
	  		 {
	  		 $this->Compra->data = $this->data;
	  		 $this->Compra->asignarAPagos();
			//$prov = new Proveedor();
			//$prov->actualizarCuentaCorriente($this->data[$this->Modelo]['proveedor_id']);
	  		 }
	  		 
	  		 $this->redirect('proveedores/view/'.$this->data[$this->Modelo]['proveedor_id']);
	         //$this->redirect('ventas/index');
	      }else
	      {
	         $data = $this->data;
	         $this->set('elementos', $data);
	         

	      }
	   }
	}
	
	
	function getPadre($idPadre)
	{
		$papa = new Proveedor();
		$papa->recursive = 0;
		return $papa->read(null,$idPadre);
	}
	
	function delete($id = 0)
	{
		//ver($this);
		//$this->redirect('/localidades');
	}	
	
	function anular($id, $idPadre)
	{
		$this->layout = 'ajax';
		
		$this->Compra->anular($id);

	    $this->redirect('proveedores/view/'.$idPadre.'/a');
		
	}
	
	function meses($ajax = null)
	{
		if($ajax)$this->layout = 'ajax';
		$this->set('error',null);
		$this->set('post', $this->data);
		$this->Compra->recursive = 2;
        $this->set('datos', $this->Compra->mesesIva());
        //ver($this->Factura);
	}		
	

	function iva($anio = 0, $mes = 0)
	{
		
		$this->layout = 'excel';
		$this->set('error',null);
		$this->set('post', $this->data);
		$this->Compra->recursive = 2;
        $this->set('datos', $this->Compra->iva($anio, $mes));
        $this->set('fecha', ucfirst(numeroMesAString($mes)).$anio);
        //ver($this->Factura);
	}		
}
?>