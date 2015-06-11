<div class="pedidos view">
<h2><?php echo __('Pedido'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo Pedido'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['codigo_pedido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Pedido'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['fecha_pedido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Entrega Pedido'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['fecha_entrega_pedido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lugar Entrega Pedido'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['lugar_entrega_pedido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Pedido'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['cantidad_pedido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto Pedido'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['monto_pedido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pedido['Persona']['facebook_persona'], array('controller' => 'personas', 'action' => 'view', $pedido['Persona']['codigo_persona'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Comentario'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['codigo_comentario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado Por'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['modificado_por']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultima Modificacion'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['ultima_modificacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pedido'), array('action' => 'edit', $pedido['Pedido']['codigo_pedido'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pedido'), array('action' => 'delete', $pedido['Pedido']['codigo_pedido']), array(), __('Are you sure you want to delete # %s?', $pedido['Pedido']['codigo_pedido'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('controller' => 'articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articulo'), array('controller' => 'articulos', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Comentarios'); ?></h3>
	<?php if (!empty($pedido['Comentario'])): ?>
		<dl>
			<dt><?php echo __('Codigo Comentario'); ?></dt>
		<dd>
	<?php echo $pedido['Comentario']['codigo_comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Tabla Origen Comentario'); ?></dt>
		<dd>
	<?php echo $pedido['Comentario']['tabla_origen_comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Codigo Tabla Origen Comentario'); ?></dt>
		<dd>
	<?php echo $pedido['Comentario']['codigo_tabla_origen_comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Comentario'); ?></dt>
		<dd>
	<?php echo $pedido['Comentario']['comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Modificado Por'); ?></dt>
		<dd>
	<?php echo $pedido['Comentario']['modificado_por']; ?>
&nbsp;</dd>
		<dt><?php echo __('Ultima Modificacion'); ?></dt>
		<dd>
	<?php echo $pedido['Comentario']['ultima_modificacion']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Comentario'), array('controller' => 'comentarios', 'action' => 'edit', $pedido['Comentario']['codigo_comentario'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Articulos'); ?></h3>
	<?php if (!empty($pedido['Articulo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Codigo Articulo'); ?></th>
		<th><?php echo __('Nombre Articulo'); ?></th>
		<th><?php echo __('Estilo Articulo'); ?></th>
		<th><?php echo __('Talla Articulo'); ?></th>
		<th><?php echo __('Color Articulo'); ?></th>
		<th><?php echo __('Marca Articulo'); ?></th>
		<th><?php echo __('Cantidad Articulo'); ?></th>
		<th><?php echo __('Precio Compra Articulo'); ?></th>
		<th><?php echo __('Precio Venta Articulo'); ?></th>
		<th><?php echo __('Codigo Tipo Articulo'); ?></th>
		<th><?php echo __('Codigo Comentario'); ?></th>
		<th><?php echo __('Modificado Por'); ?></th>
		<th><?php echo __('Ultima Modificacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pedido['Articulo'] as $articulo): ?>
		<tr>
			<td><?php echo $articulo['codigo_articulo']; ?></td>
			<td><?php echo $articulo['nombre_articulo']; ?></td>
			<td><?php echo $articulo['estilo_articulo']; ?></td>
			<td><?php echo $articulo['talla_articulo']; ?></td>
			<td><?php echo $articulo['color_articulo']; ?></td>
			<td><?php echo $articulo['marca_articulo']; ?></td>
			<td><?php echo $articulo['cantidad_articulo']; ?></td>
			<td><?php echo $articulo['precio_compra_articulo']; ?></td>
			<td><?php echo $articulo['precio_venta_articulo']; ?></td>
			<td><?php echo $articulo['codigo_tipo_articulo']; ?></td>
			<td><?php echo $articulo['codigo_comentario']; ?></td>
			<td><?php echo $articulo['modificado_por']; ?></td>
			<td><?php echo $articulo['ultima_modificacion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'articulos', 'action' => 'view', $articulo['codigo_articulo'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'articulos', 'action' => 'edit', $articulo['codigo_articulo'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'articulos', 'action' => 'delete', $articulo['codigo_articulo']), array(), __('Are you sure you want to delete # %s?', $articulo['codigo_articulo'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Articulo'), array('controller' => 'articulos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
