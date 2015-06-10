<div class="tiendas view">
<h2><?php echo __('Tienda'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo Tienda'); ?></dt>
		<dd>
			<?php echo h($tienda['Tienda']['codigo_tienda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Tienda'); ?></dt>
		<dd>
			<?php echo h($tienda['Tienda']['nombre_tienda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estilo Tienda'); ?></dt>
		<dd>
			<?php echo h($tienda['Tienda']['estilo_tienda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion Tienda'); ?></dt>
		<dd>
			<?php echo h($tienda['Tienda']['direccion_tienda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Departamento'); ?></dt>
		<dd>
			<?php echo h($tienda['Tienda']['codigo_departamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Municipio'); ?></dt>
		<dd>
			<?php echo h($tienda['Tienda']['codigo_municipio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Comentario'); ?></dt>
		<dd>
			<?php echo h($tienda['Tienda']['codigo_comentario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado Por'); ?></dt>
		<dd>
			<?php echo h($tienda['Tienda']['modificado_por']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultima Modificacion'); ?></dt>
		<dd>
			<?php echo h($tienda['Tienda']['ultima_modificacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tienda'), array('action' => 'edit', $tienda['Tienda']['codigo_tienda'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tienda'), array('action' => 'delete', $tienda['Tienda']['codigo_tienda']), array(), __('Are you sure you want to delete # %s?', $tienda['Tienda']['codigo_tienda'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiendas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tienda'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('controller' => 'articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articulo'), array('controller' => 'articulos', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Comentarios'); ?></h3>
	<?php if (!empty($tienda['Comentario'])): ?>
		<dl>
			<dt><?php echo __('Codigo Comentario'); ?></dt>
		<dd>
	<?php echo $tienda['Comentario']['codigo_comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Tabla Origen Comentario'); ?></dt>
		<dd>
	<?php echo $tienda['Comentario']['tabla_origen_comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Codigo Tabla Origen Comentario'); ?></dt>
		<dd>
	<?php echo $tienda['Comentario']['codigo_tabla_origen_comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Comentario'); ?></dt>
		<dd>
	<?php echo $tienda['Comentario']['comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Modificado Por'); ?></dt>
		<dd>
	<?php echo $tienda['Comentario']['modificado_por']; ?>
&nbsp;</dd>
		<dt><?php echo __('Ultima Modificacion'); ?></dt>
		<dd>
	<?php echo $tienda['Comentario']['ultima_modificacion']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Comentario'), array('controller' => 'comentarios', 'action' => 'edit', $tienda['Comentario']['codigo_comentario'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Articulos'); ?></h3>
	<?php if (!empty($tienda['Articulo'])): ?>
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
	<?php foreach ($tienda['Articulo'] as $articulo): ?>
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
