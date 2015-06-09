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
class Venta extends AppModel
{
	var $name = 'Venta';
	var $recursive = 2;
	//var $primaryKey = 'ventaid'; 
	/**/
	var $belongsTo = array(
            'Cliente' => 
             array('className' => 'Cliente',
                   'conditions' => '',
                   'order' => '',
                   'foreignKey' => 'clienteid',
                   'counterCache' => ''),
            'Factura' => 
             array('className' => 'Factura',
                   'conditions' => '',
                   'order' => '',
                   'foreignKey' => 'nrofactura',
                   'counterCache' => '')
            );
            
	var $hasMany =
        array('Pagoaventa' => 
               array('className' => 'Pagoaventa',
                     'order' => 'id desc'
               )
        );            
                   /**
    function ganancias()
    {
    	$fecha = date('Ymd');
    	$retorno = array();
		$cant = $this->findBySql("
	  		  
select DATE_FORMAT(created,'%M %Y') AS fecha, 
sum(ganancia) as 'ganancia'
from k_ventas 
group by fecha
	");
		//SELECT *, DATE_FORMAT(postedon,'%M %Y') AS dateGroup FROM news ORDER by dateGroup
		
		/**
		$retorno = $cant[0][0]['sum(ganancia)'];
		if(isset($cant)) return $retorno;
/**
    	return $cant;
    }
    /**/
	function asignarACobros()
	{
		//ver($this);
		/* Cobro */
		$id = $this->id;
		$idCliente = $this->data['Venta']['clienteid'];
		
		$venta = array();
		$venta[$this->name] = $this->data[$this->name];
		$venta[$this->name]['id'] = $this->id;
		
		$pago = new Cobro();
		$cancelacion = new Pagoaventa();
		$pagosConResto = $pago->findAll("Cobro.cliente_id=".$idCliente." and Cobro.resto");
		$ventasConDeuda = $this->findAll("Venta.clienteid=".$idCliente." and Venta.debe and Venta.anulado = 0 and Venta.id<>".$id);
		
		array_push($ventasConDeuda, $venta);
		$motor = new CCC($ventasConDeuda, $pagosConResto);
		$motor->cambiarAVentas();
		$saldo = $motor->ejecutar();
		
		
		/**
		
		
		//ver($ventasConDeuda);
		while($monto && isset($pagosConResto[$posicion]))
		{
			$resto = $pagosConResto[$posicion]['Cobro']['resto'];
			$idPago = $pagosConResto[$posicion]['Cobro']['id'];
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
			$pagosConResto[$posicion]['Cobro']['resto'] = $resto;
			$pago->save($pagosConResto[$posicion]);
			$cancelacion->data['Pagoaventa']['venta_id'] = $id;
			$cancelacion->data['Pagoaventa']['cobro_id'] = $idPago;
			$cancelacion->data['Pagoaventa']['valor'] = $aplicado;
			//$cancelacion->data['Pagoaventa']['id'] = null;
			$cancelacion->id = null;
			//ver($cancelacion);
			$cancelacion->save();
			$posicion++;
		}
		$this->data['Venta']['debe'] = $monto;
		$this->data['Venta']['id'] = $id;
		//ver($this->data);
		$this->save();
		/**/
		//actualizo el saldo del proveedor

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
		
		
		$cliente = new Cliente();
		//$cliente->actualizarCuentaCorriente($idCliente);
		$cliente->setSaldo($idCliente, $saldo);
		/**/
	}
                   
	function anular($id)
	{
		$error = 0;
		$venta = $this->read(null,$id);
		$pago = new Cobro();
		$pagoAVentas = new Pagoaventa();
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
		if(isset($venta['Factura']['numero']))
		{
			$error = 1;
		}else
		{
		/* */
			foreach($venta['Pagoaventa'] as $cancelacion)
			{
				$idPago = $cancelacion['cobro_id']; 
				if(!isset($pagos[$idPago]))
				{
					//copio el pago
					$pagos[$idPago]['Cobro'] = $cancelacion['Cobro'];
				}
				
				if(!isset($pagos[$idPago]['Cobro']['resto']))
				{
					$pagos[$idPago]['Cobro']['resto'] = 0;
				}
				
				$pagos[$idPago]['Cobro']['resto'] += $cancelacion['valor']; 
				//$acumulado += $cancelacion['valor'];
				//eliminar $cancelacion['id']
				$pagoAVentas->del($cancelacion['id']);
			}
			//esto se hace por separado porque puede estar un mismo pago en 
		//varias cancelaciones, para no procesarlo mas d euna vez
	//y no generar conflicto ni errores con las acumulaciones
	/**		
	foreach($pagos as $dataPago)
			{
				//guardar pago
				$pago->save($dataPago);
			}
		/**/	
			//actualizar el saldo del cliente...
	
		    //$this->redirect('clientes');
			$venta['Venta']['anulado'] = 1;
			$this->data['Venta'] = $venta['Venta'];
			//ver($this->data);
			$this->save($this->data);
			
			//reasignar dinero y operaciones
			$ventasConDeuda = $this->findAll("Venta.clienteid=".$venta[$this->name]['clienteid']." and Venta.debe and Venta.anulado = 0 and Venta.id<>".$venta[$this->name]['id']);
			
			//asignar
			$motor = new CCC($ventasConDeuda, $pagos);
			$motor->cambiarAVentas();
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
			
					
			$cliente = new Cliente();
			//$cliente->actualizarCuentaCorriente($venta['Venta']['clienteid']);
			$cliente->addSaldo($venta[$this->name]['clienteid'], $venta[$this->name]['total']);
	/* */
		}
		return $error;
	}
}

?>
