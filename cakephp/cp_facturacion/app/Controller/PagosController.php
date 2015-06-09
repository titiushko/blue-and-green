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
class PagosController extends AppController 
{
	var $name = 'Pagos';
	var $Modelo = 'Pago';
	var $scaffold;
	var $error = '';
	var $helpers = array('Html','Js');
	/**/
	function add($ajax = null, $idPadre= null)
	{
		//ver($idPadre);
		//cargo el padre
		if($ajax)$this->layout = 'ajax';
		$this->redirect("pagos/edit/".$ajax."/".$idPadre);
	}
	
	/**/
	function edit($id = null, $ajax = null, $idPadre = null)
	{
		if($ajax)$this->layout = 'ajax';
		//ver($idPadre);
		$papa = new Proveedor();
		//ver($this);			
		
		$papa->recursive = 0;
		$padre = $papa->read(null,$idPadre);
		//ver($padre);
		$this->set('padre',$padre);
		
		
		
		$this->set('error', null);
		if($id) $this->set('accion','editar');
		else 		$this->set('accion','agregar');
		$this->set('idPadre', $idPadre);
		
	    if(empty($this->data))
	   	{
	   		
	   		//si estoy editando
	   		if($id)
	   		{
	   			
	      $this->Pago->id = $id;
	      $this->data = $this->Pago->read();
	      $data = $this->Pago->read(null, $id);
	      $this->set('elementos', $data);
	      
	      //inicializo los campos relacionados

	      //constryo un array de localidades
	      //$this->set('articulos', $this->Pago->Articulo->generateList());
	   			
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
	  		if($this->data[$this->Modelo]['id']) $grabar = false;

	  		$fecha = $_POST['fecha'];
			$this->data[$this->Modelo]['fecha'] = substr($fecha,6,4).substr($fecha,3,2).substr($fecha,0,2);
			$this->data[$this->Modelo]['resto'] = $this->data[$this->Modelo]['monto'];
			

	      if($grabar)
	      {
	     	
	  		 //ver($this->Pago);
	  		 $this->Pago->save($this->data);
	  		 $this->Pago->data = $this->data;
	  		 $this->Pago->asignarACompras();
			//$prov = new Proveedor();
			//$prov->actualizarCuentaCorriente($idPadre);
	  		 
	  		// $this->data['Pago']['id'] = $this->Pago->getLastInsertId();
	  		 $this->redirect('proveedores/view/'.$this->data['Pago']['proveedor_id']);
	         //$this->redirect('clientes');
	         //$this->redirect('pagos/index');
	      }else
	      {
	         $data = $this->data;
	         $this->set('elementos', $data);
	      }
/**/
	   }
	}
	function delete($id = 0)
	{
		//ver($this);
		//$this->redirect('/localidades');
	}
	
	function test()
	{
		
	}
/**/
}// fin de controlador


?>