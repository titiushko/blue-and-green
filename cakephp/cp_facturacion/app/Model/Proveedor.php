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
class Proveedor extends AppModel
{
	var $name = 'Proveedor';
	var $displayField= 'nombre';
	/**/
	var $hasMany =
        array('Compras' =>
               array('className' => 'Compra',
                     'order' => 'id desc'
               ),
        		'Pagos' =>
               array('className' => 'Pago',
                     'order' => 'id desc'
               ) 
        );
/**/
    function actualizarCuentaCorriente($id = null)
    {
    	/*
    	 * levanto cliente
    	 * levanto deuda
    	 * sino levanto pagos
hay deuda?
sino, hay resto?
setSaldo
*/
		if($id)
		{
			$saldo = 0;
			$this->read(null, $id);
			$venta = new Compra();
			$ventasConDeuda = $venta->findAll("Compra.proveedor_id=".$id." and Compra.debe and Compra.anulado = 0");
			if(isset($ventasConDeuda[0]))
			{
				foreach($ventasConDeuda as $ven)
				{
					$saldo -= $ven['Compra']['debe'];
				}
			}
			
				$pago = new Pago();
				$pagosConResto = $pago->findAll("Pago.proveedor_id=".$id." and Pago.resto");
				if(isset($pagosConResto[0]))
				{
					foreach($pagosConResto as $pag)
					{
						$saldo += $pag['Pago']['resto'];
					}
				}
			
			//ver($ventasConDeuda);
			//ver($pagosConResto);
			$this->data['Proveedor']['saldo'] = $saldo;
			$this->save($this->data);
		}
    }
    
    function setSaldo($id, $saldo)
    {
		if($id)
		{
			$this->read(null, $id);
			//ver($this);
			$this->data['Proveedor']['saldo'] = $saldo;
			$this->save($this->data);
		}
    }

    function addSaldo($id, $saldo)
    {
		if($id)
		{
			$this->data = $this->read(null, $id);
			$this->data['Proveedor']['saldo'] += $saldo;
			$this->save($this->data);
		}
    }
}

?>
