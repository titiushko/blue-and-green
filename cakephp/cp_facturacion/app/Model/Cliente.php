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
class Cliente extends AppModel
{
	var $name = 'Cliente';
	var $displayField= 'nombre';
	//var $primaryKey = 'clienteid';
	/**/
	var $hasMany =
        array('Ventas' => 
               array('className' => 'Venta',
                     'foreignKey' => 'clienteid',
                     'order' => 'id desc'
               ),
               'Facturas' => 
               array('className' => 'Factura',
                     'order' => 'id desc'
               ),
        		'Cobros' => 
               array('className' => 'Cobro',
                     'order' => 'id desc'
               ) 
        );
	var $belongsTo = array(
            'Localidad' => 
             array('className' => 'Localidad',
                   'conditions' => '',
                   'order' => '',
                   'counterCache' => ''),
            'Condicioniva' => 
             array('className' => 'Condicioniva',
                   'conditions' => '',
                   'order' => '',
                   'foreignKey' => 'IVA',
                   'counterCache' => '')
                   ,
            'tipofacturacion' => 
             array('className' => 'Tipofacturacion',
                   'conditions' => '',
                   'order' => '',
                   'foreignKey' => 'facturacion',
                   'counterCache' => ''
					) 
                   );

    function actualizarCuentaCorriente($id = null)
    {
    	/*
    	 * levanto cliente
    	 * levanto deuda
    	 * levanto pagos
hay deuda?
sino, hay resto?
setSaldo
*/
		if($id)
		{
			$saldo = 0;
			$this->read(null, $id);
			$venta = new Venta();
			$ventasConDeuda = $venta->findAll("Venta.clienteid=".$id." and Venta.debe and Venta.anulado = 0");
			if(isset($ventasConDeuda[0]))
			{
				foreach($ventasConDeuda as $ven)
				{
					$saldo -= $ven['Venta']['debe'];
				}
			}
			
				$pago = new Cobro();
				$pagosConResto = $pago->findAll("Cobro.cliente_id=".$id." and Cobro.resto");
				if(isset($pagosConResto[0]))
				{
					foreach($pagosConResto as $pag)
					{
						$saldo += $pag['Cobro']['resto'];
					}
				}
			
			//ver($ventasConDeuda);
			//ver($pagosConResto);
			$this->data['Cliente']['saldo'] = $saldo;
			$this->save($this->data);
		}
    }
    
    function setSaldo($id, $saldo)
    {
		if($id)
		{
			$this->read(null, $id);
			$this->data[$this->name]['saldo'] = $saldo;
			$this->save($this->data);
		}
    }

    function addSaldo($id, $saldo)
    {
		if($id)
		{
			$this->data = $this->read(null, $id);
			$this->data[$this->name]['saldo'] += $saldo;
			$this->save($this->data);
		}
    }
    /**/
}

?>