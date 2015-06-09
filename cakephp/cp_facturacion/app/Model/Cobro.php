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
class Cobro extends AppModel
{
	var $name = 'Cobro';
	//var $displayField= 'nombre';
	//var $primaryKey = 'pagoid';
	var $belongsTo = array(
            'Cliente' => 
             array('className' => 'Cliente',
                   'conditions' => '',
                   'order' => '',
                   'counterCache' => ''));	
	var $hasMany = array(
            'Pagoaventa' => 
             array('className' => 'Pagoaventa',
                   'conditions' => '',
                   'order' => '',
                   'counterCache' => ''));	

                  
    
	function asignarAVentas()
	{
		//ver($this);
		/* Cobro
*/
		$idPago = $this->id;
		$idCliente = $this->data['Cobro']['cliente_id'];
		
		$cobro = array();
		$cobro['Cobro'] = $this->data['Cobro'];
		$cobro['Cobro']['id'] = $idPago;
				
		$venta = new Venta();
		$cancelacion = new Pagoaventa();
		$ventasConDeuda = $venta->findAll("Venta.clienteid=".$idCliente." and Venta.debe and Venta.anulado = 0");
		$pagosConResto = $this->findAll("Cobro.cliente_id=".$idCliente." and Cobro.resto and Cobro.id<>".$idPago);

		array_push($pagosConResto, $cobro);
		$motor = new CCC($ventasConDeuda, $pagosConResto);
		$motor->cambiarAVentas();
		$saldo = $motor->ejecutar();
		
		/**
		$posicion = 0;
		//ver($ventasConDeuda);
		while($monto && isset($ventasConDeuda[$posicion]))
		{
			$deuda = $ventasConDeuda[$posicion]['Venta']['debe'];
			$idVenta = $ventasConDeuda[$posicion]['Venta']['id'];
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
			$ventasConDeuda[$posicion]['Venta']['debe'] = $deuda;
			$venta->save($ventasConDeuda[$posicion]);
			$cancelacion->data['Pagoaventa']['venta_id'] = $idVenta;
			$cancelacion->data['Pagoaventa']['cobro_id'] = $idPago;
			$cancelacion->data['Pagoaventa']['valor'] = $aplicado;
			//$cancelacion->data['Pagoaventa']['id'] = null;
			$cancelacion->id = null;
			//ver($cancelacion);
			$cancelacion->save();
			$posicion++;
		}
		$this->data['Cobro']['resto'] = $monto;
		$this->data['Cobro']['id'] = $idPago;
		//ver($this->data);
		$this->save();
		/**/
		//actualizo el saldo del proveedor

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
		
		$prov = new Cliente();
		$prov->setSaldo($idCliente, $saldo);
		
		
//		$prov->actualizarCuentaCorriente($idCliente);
		
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