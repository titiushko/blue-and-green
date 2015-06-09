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
class VentasController extends AppController 
{
	var $name = 'Ventas';
	var $Modelo = 'Venta';
	var $scaffold;
	var $error = '';
	var $helpers = array('Html','Js');
	/**/
	function add($ajax = null, $idPadre= null)
	{
		//ver($idPadre);
		//cargo el padre
		
		$this->redirect("ventas/edit/0/".$ajax."/".$idPadre);
		
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
	   			
	      $this->Venta->id = $id;	
	      $this->data = $this->Venta->read();
	      $data = $this->Venta->read(null, $id);
	      $this->set('elementos', $data);
	      
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
	  		if(!$this->data['Venta']['decontado'])
	  		$this->data['Venta']['debe'] = $this->data['Venta']['total'];
	  		
	  		$fecha = $_POST['fecha'];
			$this->data['Venta']['fecha'] = substr($fecha,6,4).substr($fecha,3,2).substr($fecha,0,2);
			

	  		//calcula la ganancia
/**
	  		if(!$this->data[$this->modelClass]['ganancia'] && !$this->data[$this->modelClass]['id'])
	  		{
				$costo = $this->consumir($this->data['Venta']['idArticulo'],$this->data['Venta']['cantidad']);
				if($costo)
				{
					$this->data[$this->modelClass]['ganancia'] = $this->data[$this->modelClass]['precio'] * $this->data[$this->modelClass]['cantidad']  - $costo;
					ver($costo);
				}else
				{
					$grabar = false;
				}
	  		}
/**/
	  		/*

	  		 * this->data es asi
	  		 * [data] => Array
        (
            [Venta] => Array
                (
                    [id] => 
                    [idArticulo] => 3
                    [ganancia] => 12
                    [cantidad] => 22
                    [precio] => 12
                )

        )
	  		 */

	  		/*
	  		 * ejemplos
	  		 * $suma = $this->Usuario->Voto->findBySql("select sum(votos.valor_voto)
from usuarios, votos where usuarios.id=votos.usuario_id and
usuarios.id='elusuarioqueuiqeresaveriguar'"); 

$cantidad = $this->Usuario->Voto-
>findCount(array('Usuario.id'=>'Voto.usuario_id', 'Usuario.id'=>'EL-
USUARIO-QUE-QUIERES-AVERIGUAR')); 
	  		 *

	/**/

	      if($grabar)
	      {
	  		 if($this->Venta->save($this->data))
	  		 {
	  		 	
	  		 $this->Venta->data = $this->data;
	  		 $this->Venta->asignarACobros();
			//$cliente = new Cliente();
			//$cliente->actualizarCuentaCorriente($this->data['Venta']['clienteid']);
	  		 }
	  		 
	  		 $this->redirect('clientes/view/'.$this->data['Venta']['clienteid']);
	         //$this->redirect('ventas/index');
	      }else
	      {
	         $data = $this->data;
	         $this->set('elementos', $data);
	         

	      }
	   }
	}
	
	function facturar($ajax = null, $idPadre= null, $esResumen = 0)
	{
		/**
		 leer ventas del cliente
		tildar ventas
postear
		 /**/
		if($ajax)$this->layout = 'ajax';
		$this->set('padre',$this->getPadre($idPadre));
		$this->set('idPadre',$idPadre);
		$this->Venta->recursive = 0;
		//criteria es el criterio de filtro...
	 	$this->set('esResumen',$esResumen);
        $this->set('elementos', $this->Venta->findAll("Venta.clienteid=".$idPadre." and Venta.nrofactura = 0  and Venta.anulado = 0 ")); 		
	}
	
	function getPadre($idPadre)
	{
		$papa = new Cliente();
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
		$error = $this->Venta->anular($id);
		$this->redirect('clientes/view/'.$idPadre.'/a/'.$error);
	}
}// fin de controlador

?>