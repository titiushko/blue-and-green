<div class="articulos view">
<h2><?php echo __('Articulo'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo Articulo'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['codigo_articulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Articulo'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['nombre_articulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estilo Articulo'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['estilo_articulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talla Articulo'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['talla_articulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Articulo'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['color_articulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marca Articulo'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['marca_articulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Articulo'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['cantidad_articulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio Compra Articulo'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['precio_compra_articulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio Venta Articulo'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['precio_venta_articulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipos Articulo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articulo['TiposArticulo']['nombre_tipo_articulo'], array('controller' => 'tipos_articulos', 'action' => 'view', $articulo['TiposArticulo']['codigo_tipo_articulo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Comentario'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['codigo_comentario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado Por'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['modificado_por']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultima Modificacion'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['ultima_modificacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Articulo'), array('action' => 'edit', $articulo['Articulo']['codigo_articulo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Articulo'), array('action' => 'delete', $articulo['Articulo']['codigo_articulo']), array(), __('Are you sure you want to delete # %s?', $articulo['Articulo']['codigo_articulo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articulo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Articulos'), array('controller' => 'tipos_articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Articulo'), array('controller' => 'tipos_articulos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiendas'), array('controller' => 'tiendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tienda'), array('controller' => 'tiendas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Comentarios'); ?></h3>
	<?php if (!empty($articulo['Comentario'])): ?>
		<dl>
			<dt><?php echo __('Codigo Comentario'); ?></dt>
		<dd>
	<?php echo $articulo['Comentario']['codigo_comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Tabla Origen Comentario'); ?></dt>
		<dd>
	<?php echo $articulo['Comentario']['tabla_origen_comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Codigo Tabla Origen Comentario'); ?></dt>
		<dd>
	<?php echo $articulo['Comentario']['codigo_tabla_origen_comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Comentario'); ?></dt>
		<dd>
	<?php echo $articulo['Comentario']['comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Modificado Por'); ?></dt>
		<dd>
	<?php echo $articulo['Comentario']['modificado_por']; ?>
&nbsp;</dd>
		<dt><?php echo __('Ultima Modificacion'); ?></dt>
		<dd>
	<?php echo $articulo['Comentario']['ultima_modificacion']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Comentario'), array('controller' => 'comentarios', 'action' => 'edit', $articulo['Comentario']['codigo_comentario'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Tiendas'); ?></h3>
	<?php if (!empty($articulo['Tienda'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Codigo Tienda'); ?></th>
		<th><?php echo __('Nombre Tienda'); ?></th>
		<th><?php echo __('Estilo Tienda'); ?></th>
		<th><?php echo __('Direccion Tienda'); ?></th>
		<th><?php echo __('Codigo Departamento'); ?></th>
		<th><?php echo __('Codigo Municipio'); ?></th>
		<th><?php echo __('Codigo Comentario'); ?></th>
		<th><?php echo __('Modificado Por'); ?></th>
		<th><?php echo __('Ultima Modificacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($articulo['Tienda'] as $tienda): ?>
		<tr>
			<td><?php echo $tienda['codigo_tienda']; ?></td>
			<td><?php echo $tienda['nombre_tienda']; ?></td>
			<td><?php echo $tienda['estilo_tienda']; ?></td>
			<td><?php echo $tienda['direccion_tienda']; ?></td>
			<td><?php echo $tienda['codigo_departamento']; ?></td>
			<td><?php echo $tienda['codigo_municipio']; ?></td>
			<td><?php echo $tienda['codigo_comentario']; ?></td>
			<td><?php echo $tienda['modificado_por']; ?></td>
			<td><?php echo $tienda['ultima_modificacion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tiendas', 'action' => 'view', $tienda['codigo_tienda'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tiendas', 'action' => 'edit', $tienda['codigo_tienda'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tiendas', 'action' => 'delete', $tienda['codigo_tienda']), array(), __('Are you sure you want to delete # %s?', $tienda['codigo_tienda'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tienda'), array('controller' => 'tiendas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pedidos'); ?></h3>
	<?php if (!empty($articulo['Pedido'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Codigo Pedido'); ?></th>
		<th><?php echo __('Fecha Pedido'); ?></th>
		<th><?php echo __('Fecha Entrega Pedido'); ?></th>
		<th><?php echo __('Lugar Entrega Pedido'); ?></th>
		<th><?php echo __('Cantidad Pedido'); ?></th>
		<th><?php echo __('Monto Pedido'); ?></th>
		<th><?php echo __('Codigo Persona'); ?></th>
		<th><?php echo __('Codigo Comentario'); ?></th>
		<th><?php echo __('Modificado Por'); ?></th>
		<th><?php echo __('Ultima Modificacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($articulo['Pedido'] as $pedido): ?>
		<tr>
			<td><?php echo $pedido['codigo_pedido']; ?></td>
			<td><?php echo $pedido['fecha_pedido']; ?></td>
			<td><?php echo $pedido['fecha_entrega_pedido']; ?></td>
			<td><?php echo $pedido['lugar_entrega_pedido']; ?></td>
			<td><?php echo $pedido['cantidad_pedido']; ?></td>
			<td><?php echo $pedido['monto_pedido']; ?></td>
			<td><?php echo $pedido['codigo_persona']; ?></td>
			<td><?php echo $pedido['codigo_comentario']; ?></td>
			<td><?php echo $pedido['modificado_por']; ?></td>
			<td><?php echo $pedido['ultima_modificacion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pedidos', 'action' => 'view', $pedido['codigo_pedido'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pedidos', 'action' => 'edit', $pedido['codigo_pedido'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pedidos', 'action' => 'delete', $pedido['codigo_pedido']), array(), __('Are you sure you want to delete # %s?', $pedido['codigo_pedido'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
