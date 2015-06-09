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
class Factura extends AppModel
{
	var $name = 'Factura';
	//var $displayField= 'nombre';
	//var $primaryKey = 'pagoid';
	var $hasMany =
        array('Venta' => 
               array('className' => 'Venta',
                     'foreignKey' => 'nrofactura'
               )
        );
   	var $belongsTo = array(
   	            'Condicioniva' => 
             array('className' => 'Condicioniva',
                   'conditions' => '',
                   'order' => '',
                   'foreignKey' => 'condicion_iva',
                   'counterCache' => '')
                   ,
   	
           'Cliente' => 
            array('className' => 'Cliente',
                  'conditions' => '',
                  'order' => '',
                  'counterCache' => '')
                 );
	
/**
	var $belongsTo = array(
            'Cliente' => 
             array('className' => 'Cliente',
                   'conditions' => '',
                   'order' => '',
                   'foreignKey' => 'cliente',
                   'counterCache' => '')
                   );
/**/


	function asignarAVentas()
	{
		//$this->fin
		$idFac = $this->id;
		$venta = new Venta();
		foreach($this->data['Venta'] as $ventaId)
		{
			$venta->read(null,$ventaId);
			$venta->data['Venta']['nrofactura'] = $idFac;
			$venta->save();
		}
	}
	
    function ivaVentas($anio, $mes)
    {
    	$fecha = date('Ymd');
    	$retorno = array();
    	/**/
		$cant = $this->findBySql("
select  *
from facturas
where DATE_FORMAT(fecha,'%m')=".$mes." 
and DATE_FORMAT(fecha,'%Y')=".$anio);

    	/**
		$cant = $this->findBySql("
select DATE_FORMAT(created,'%M %Y') AS fecha, 
sum(ganancia) as 'ganancia'
from ventas 
group by fecha
	");
/**/
    	//SELECT *, DATE_FORMAT(postedon,'%M %Y') AS dateGroup FROM news ORDER by dateGroup
		
		/**
		$retorno = $cant[0][0]['sum(ganancia)'];
		if(isset($cant)) return $retorno;
/**/
    	return $cant;
    }	
    
    function mesesIva()
    {
    	$fecha = date('Ymd');
    	$retorno = array();
    	/**/
		$cant = $this->findBySql("
select DATE_FORMAT(fecha,'%m') AS mes, DATE_FORMAT(fecha,'%Y') AS anio, DATE_FORMAT(fecha,'%M %Y') AS vinculo
from facturas
where not anulado
group by mes, anio
order by anio desc, mes desc
");
/**/
		$retorno = array();
		foreach($cant as $res)
		{
			array_push($retorno, $res[0]);
		}
    	return $retorno;
    }

    function anular($id)
    {
		/*
ANULACION DE FACTURA
+ se levantan las ventas incluidas
+ seteo del campo nrofactura = 0 en todos los casos.
+ seteo del campo anulado = 1 en factura.
*/		
		$flag = 0;
		$ventaModel = new Venta();
    	$factura = $this->read(null, $id);

    	foreach($factura['Venta'] as $venta)
    	{
    		$venta['nrofactura'] = 0;
    		$ventaModel->data['Venta'] = $venta;
    		if(!$ventaModel->save($ventaModel->data)) $flag = 1;
    	}
    	
    	if(!$flag)
    	{
	    	$factura['Factura']['anulado'] = 1;
	    	$this->data['Factura'] = $factura['Factura'];
	    	$this->save();
       	}
       	
    	return $factura;
    }
}

?>
