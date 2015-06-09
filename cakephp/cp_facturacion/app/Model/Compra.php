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
class Compra extends AppModel
{
	var $Modelo = 'Compra';
	var $name = 'Compra';
	var $recursive = 2;
	/**/
	var $belongsTo = array(
            'Proveedor' =>   
             array('className' => 'Proveedor',
                   'conditions' => '',
                   'counterCache' => '')
                   
                   );
                   
	var $hasMany =
        array('Pagoacompra' => 
               array('className' => 'Pagoacompra',
                     'order' => 'id desc'
               )
        );            
        
	function asignarAPagos()
	{
		$Modelo = $this->Modelo;
		$ModeloDebil = 'Pagoacompra';
		//ver($this);
		/**/
		$id = $this->id;
		$idCliente = $this->data[$Modelo]['proveedor_id'];
		$venta = array();
		$venta[$Modelo] = $this->data[$Modelo];
		$venta[$Modelo]['id'] = $this->id;
		$pago = new Pago();
		$cancelacion = new Pagoacompra();
		$pagosConResto = $pago->findAll("Pago.proveedor_id=".$idCliente." and Pago.resto");
		$ventasConDeuda = $this->findAll("Compra.proveedor_id=".$idCliente." and Compra.debe and Compra.anulado = 0 and Compra.id<>".$id);
		array_push($ventasConDeuda, $venta);
		$motor = new CCC($ventasConDeuda, $pagosConResto);
		$saldo = $motor->ejecutar();
		
		/**
		$posicion = 0;
		//ver($ventasConDeuda);
		while($monto && isset($pagosConResto[$posicion]))
		{
			$resto = $pagosConResto[$posicion]['Pago']['resto'];
			$idPago = $pagosConResto[$posicion]['Pago']['id'];
			if($resto > $monto)
			{
				$resto = $resto - $monto;
				$aplicado = $monto;
				$monto = 0;
			}else
			{
				$monto = $monto - $resto;
				$aplicado = $resto;
				$resto = 0;
			}
			$pagosConResto[$posicion]['Pago']['resto'] = $resto;
			$pago->save($pagosConResto[$posicion]);
			$cancelacion->data[$ModeloDebil]['compra_id'] = $id;
			$cancelacion->data[$ModeloDebil]['pago_id'] = $idPago;
			$cancelacion->data[$ModeloDebil]['valor'] = $aplicado;
			//$cancelacion->data['Pagoaventa']['id'] = null;
			$cancelacion->id = null;
			//ver($cancelacion);
			$cancelacion->save();
			$posicion++;
		}
		$this->data[$Modelo]['debe'] = $monto;
		$this->data[$Modelo]['id'] = $id;
		//ver($this->data);
		$this->save();
		
		//actualizo el saldo del proveedor sincronizado

		$saldo = 0;
/**/
		foreach($motor->compras as $ent)
		{
			$this->id = null;
			$this->save($ent);
		}
		
		foreach($motor->pagos as $ent)
		{
			$pago->save($ent);
		}
		
		foreach($motor->debil as $ent)
		{
			$cancelacion->save($ent);
		}

		$cliente = new Proveedor();
		//$cliente->actualizarCuentaCorriente($idCliente);
		$cliente->setSaldo($idCliente, $saldo);
/**/
	}        
	
    function mesesIva()
    {
    	$fecha = date('Ymd');
    	/**/
		$cant = $this->findBySql("
select DATE_FORMAT(fecha,'%m') AS mes, DATE_FORMAT(fecha,'%Y') AS anio, DATE_FORMAT(fecha,'%M %Y') AS vinculo
from compras
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
    
    function iva($anio, $mes)
    {
    	$fecha = date('Ymd');
    	$retorno = array();
    	$this->recursive= 1;
		$cant = $this->findAll("
DATE_FORMAT(fecha,'%m')=".$mes." 
and DATE_FORMAT(fecha,'%Y')=".$anio);
    	
    	/**
		$cant = $this->findBySql("
select  *
from compras
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
	
    function anular($id)
    {
		
		$venta = $this->read(null,$id);
		$pago = new Pago();
		$pagoAVentas = new Pagoacompra();
		//ver ($venta);
		/*
		 * 
ANULACION DE VENTA
+ se levantan todos los pagos a ventas de la misma
+ si tiene, 
  - se suma al resto de cada pago la cancelacion del pago a ventas
  - se acumula la cancelacion del pago a ventas
  - se elimina el pago a ventas
+ si se acumulo se suma lo acumulado al saldo del cliente
+ seteo de anulado = 1 en la venta		
+ redirecciono a la vista del cliente
		 */
		
		//$acumulado = 0;
		$pagos = array();//creo un arreglo de pagos
		//ver($venta);

		/* */
		foreach($venta['Pagoacompra'] as $cancelacion)
		{
			$idPago = $cancelacion['pago_id'];
			if(!isset($pagos[$idPago]))
			{
				//copio el pago
				$pagos[$idPago]['Pago'] = $cancelacion['Pago'];
			}
			
			if(!isset($pagos[$idPago]['Pago']['resto']))
			{
				$pagos[$idPago]['Pago']['resto'] = 0;
			}
			
			$pagos[$idPago]['Pago']['resto'] += $cancelacion['valor'];
			//$acumulado += $cancelacion['valor'];
			//eliminar $cancelacion['id']
			$pagoAVentas->del($cancelacion['id']);
		}
		
		
		
	    //$this->redirect('clientes');
		$venta[$this->Modelo]['anulado'] = 1;
		$data[$this->Modelo] = $venta[$this->Modelo];
		$this->save($data);
		
		//reasignar dinero y operaciones

		$ventasConDeuda = $this->findAll("Compra.proveedor_id=".$venta[$this->Modelo]['proveedor_id']." and Compra.debe and Compra.anulado = 0 and Compra.id<>".$venta[$this->Modelo]['id']);
		
		//asignar
		$motor = new CCC($ventasConDeuda, $pagos);
		$motor->ejecutar();
		
    	foreach($motor->compras as $ent)
		{
			$this->id = null;
			$this->save($ent);
		}
		
		foreach($motor->pagos as $ent)
		{
			$pago->save($ent);
		}
		
		foreach($motor->debil as $ent)
		{
			$pagoAVentas->save($ent);
		}
		/**		
		foreach($ventasConDeuda as $op)
		{
			$this->data = $op;
			$this->id = $op['Compra']['id'];
			$this->asignarAPagos($pagos);
		}

		//esto se hace por separado porque puede estar un mismo pago en 
	//varias cancelaciones, para no procesarlo mas d euna vez
//y no generar conflicto ni errores con las acumulaciones
    	foreach($pagos as $dataPago)
		{
			//guardar pago
			$pago->save($dataPago);
		}
/**/
		//actualizar el saldo del cliente...
		$prov = new Proveedor();
		//$prov->actualizarCuentaCorriente($venta[$this->Modelo]['proveedor_id']);
		$prov->addSaldo($venta[$this->Modelo]['proveedor_id'], $venta[$this->Modelo]['total']);
/* */
    }
}
?>