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
class Pago extends AppModel
{
	var $name = 'Pago';
	var $transactional = true;
	var $displayField= 'nombre';
	//var $primaryKey = 'pagoid';
	var $belongsTo = array(
            'Proveedor' => 
             array('className' => 'Proveedor',
                   'conditions' => '',
                   'order' => '',
                   'counterCache' => ''));	
	var $hasMany = array(
            'Pagoacompra' => 
             array('className' => 'Pagoacompra',
                   'conditions' => '',
                   'order' => '',
                   'counterCache' => ''));	

                  
    
	function asignarACompras()
	{
		//ver($this);
		/**/
		$idPago = $this->id;
		$idProveedor = $this->data['Pago']['proveedor_id'];
		$pago = array();
		$pago['Pago'] = $this->data['Pago'];
		$pago['Pago']['id'] = $idPago;
		
		$venta = new Compra();
		$cancelacion = new Pagoacompra();
		$ventasConDeuda = $venta->findAll("Compra.proveedor_id=".$idProveedor." and Compra.debe and Compra.anulado = 0");
		$pagosConResto = $this->findAll("Pago.proveedor_id=".$idProveedor." and Pago.resto and Pago.id<>".$idPago);
		array_push($pagosConResto, $pago);
		$motor = new CCC($ventasConDeuda, $pagosConResto);
		$saldo = $motor->ejecutar();
		
		/**
		$posicion = 0;
		//ver($ventasConDeuda);
		while($monto && isset($ventasConDeuda[$posicion]))
		{
			$deuda = $ventasConDeuda[$posicion]['Compra']['debe'];
			$idVenta = $ventasConDeuda[$posicion]['Compra']['id'];
			if($deuda > $monto)
			{
				$deuda = $deuda - $monto;
				$aplicado = $monto;
				$monto = 0;
			}else
			{
				$monto = $monto - $deuda;
				$aplicado = $deuda;
				$deuda = 0;
			}
			$ventasConDeuda[$posicion]['Compra']['debe'] = $deuda;
			$venta->save($ventasConDeuda[$posicion]);
			$cancelacion->data['Pagoacompra']['compra_id'] = $idVenta;
			$cancelacion->data['Pagoacompra']['pago_id'] = $idPago;
			$cancelacion->data['Pagoacompra']['valor'] = $aplicado;
			//$cancelacion->data['Pagoaventa']['id'] = null;
			$cancelacion->id = null;
			//ver($cancelacion);
			$cancelacion->save();
			$posicion++;
		}
		$this->data['Pago']['resto'] = $monto;
		$this->data['Pago']['id'] = $idPago;
		//ver($this->data);
		$this->save();
		
		//actualizo el saldo del proveedor
/**/
		foreach($motor->compras as $ent)
		{
			$venta->save($ent);
		}
		
		foreach($motor->pagos as $ent)
		{
			$this->id = null;
			$this->save($ent);
		}
		
		foreach($motor->debil as $ent)
		{
			$cancelacion->save($ent);
		}
		
		$prov = new Proveedor();
		//$prov->actualizarCuentaCorriente($idProveedor);
		//$prov->actualizarSaldo($idProveedor, $this->data['Pago']['monto']);
		$prov->setSaldo($idProveedor, $saldo);
		
		/**

mientras haya ventas con deuda y quede monto 
	obtengo deuda
	obtengo idventa
	si deuda mayor que monto
		queda resto y no queda monto
	sino
		queda monto y no queda resto
	guardo venta
	guardo cancelacion
guardo pago
		/**
	//selecciono las ventas con deuda del cliente
	$sql = '
		select ventaid,debe 
		from ventas 
		where debe > 0 and clienteid ='.$cid.' 
		order by fecha
	';
	
	$rsventas = mysql_query($sql);
	//error_mysql("cargando ventas con deuda");
	//mostrarrs($sql,"");
	$nfilas = mysql_num_rows($rsventas);
	$fila = 0;
	if($nfilas)//si tiene ventas con deuda
	{
		while($monto > 0 && $fila < $nfilas)
		{
			$deuda = mysql_result($rsventas,$fila,1);
			$ventaid = mysql_result($rsventas,$fila,0);
			if($deuda > $monto)
			{
				$restante = $deuda - $monto;
				$aplicado = $monto;
				$monto = 0;
			}else
			{
				$restante = 0;
				$aplicado = $deuda;
				$monto = $monto - $deuda;
				$fila++;
			}

			$sql = '
			update ventas 
			set debe ='.$restante.'
			where ventaid ='.$ventaid;
			mysql_query($sql);
			//error_mysql("actualizando el saldo de venta");

			$sql = '
			insert ventaspagos(ventaid,pagoid,cancelacion)
			values('.$ventaid.','.$pid.','.$aplicado.')';
			mysql_query($sql);
			//error_mysql("registrando el pago de la venta");
		}
		mysql_query("
update pagos set resto=$monto where pagoid=$pid
		");
	}
	//mostrarsaldo($cid);
/**/
	}
}

?>