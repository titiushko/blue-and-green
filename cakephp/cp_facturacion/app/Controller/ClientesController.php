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
class ClientesController extends AppController 
{
	var $Modelo = 'Cliente';
	var $name = 'Clientes';
	//var $layout = 'ajax';
	var $scaffold;
	var $helpers = array('Html','Js','Paginator');
	var $components = array('Paginator');
	
	function view($id, $ajax = null, $error = null)
	{
		if($ajax)$this->layout = 'ajax';
		$this->Cliente->recursive = 2;
		$this->set('datos', $this->Cliente->read(null, $id));
		
		switch($error)
		{
			case 1:
				$error = 'La venta esta facturada, no se puede anular...';
			break;
		}
		if($error) $error = error($error);
		$this->set('error', $error);
		//$factura = new Factura();
		//$this->set('facturas', $factura->findAll("Venta.clienteid=".$id));
	}
	/**/
	function index($ajax = null)
	{
		if($ajax)$this->layout = 'ajax';
		$filtronombre = null;
		$filtrodireccion = null;
		$search_term = null;
		$and = null;
       	$criteria = null;
		//ver($this);
		//codigo que procesa el criterio de busqueda y filtro
			//si postee la busqueda
        if($this->data[$this->Modelo]['search'])
        {
			 if($this->data[$this->Modelo]['search'] )
	          {
	             $filtronombre  = $this->data[$this->Modelo]['filtronombre'];
	             $filtrodireccion  = $this->data[$this->Modelo]['filtrodireccion'];
	          	//$search_term = $this->data[$this->Modelo]['search'];
               	if($filtronombre)
		       	{
		       		$criteria = " Cliente.nombre like '%".$filtronombre."%'";
		       		$and = ' and ';		
		       	}	              
               	if($filtrodireccion)
		       	{
		       		$criteria = " Cliente.direccion like '%".$filtrodireccion."%'";
		       		$and = ' and ';		
		       	}
	          }
                   
              $this->Session->write('search_term', $criteria);
          }else
          {
          	//si hay un criterio en la sesion
	          if (!$criteria = $this->Session->read('search_term'))
	          {
	              $search_term = '';
	              $this->Session->write('search_term', $search_term);
	          }
          }
                		
		$this->Cliente->recursive = 0;
		//criteria es el criterio de filtro...

		 
        list($order,$limit,$page) = $this->Paginator->init($criteria);
        $this->set('clientes', $this->Cliente->findAll($criteria, NULL, $order, $limit, $page) ); 		
        $this->set('filtronombre',$filtronombre);
        $this->set('filtrodireccion',$filtrodireccion);
        //$this->set('Clientes', $this->Cliente-> findAll());
	}
/**/
	function ayuda($ajax = null)
	{
		if($ajax)$this->layout = 'ajax';
	}
	
	function delete($id = 0)
	{
		//ver($this);
		//$this->redirect('/localidades');
	}
}

?>