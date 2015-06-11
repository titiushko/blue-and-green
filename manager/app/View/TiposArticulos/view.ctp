<div class="tiposArticulos view">
<h2><?php echo __('Tipos Articulo'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo Tipo Articulo'); ?></dt>
		<dd>
			<?php echo h($tiposArticulo['TiposArticulo']['codigo_tipo_articulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Tipo Articulo'); ?></dt>
		<dd>
			<?php echo h($tiposArticulo['TiposArticulo']['nombre_tipo_articulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado Por'); ?></dt>
		<dd>
			<?php echo h($tiposArticulo['TiposArticulo']['modificado_por']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultima Modificacion'); ?></dt>
		<dd>
			<?php echo h($tiposArticulo['TiposArticulo']['ultima_modificacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipos Articulo'), array('action' => 'edit', $tiposArticulo['TiposArticulo']['codigo_tipo_articulo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipos Articulo'), array('action' => 'delete', $tiposArticulo['TiposArticulo']['codigo_tipo_articulo']), array(), __('Are you sure you want to delete # %s?', $tiposArticulo['TiposArticulo']['codigo_tipo_articulo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Articulos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Articulo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('controller' => 'articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articulo'), array('controller' => 'articulos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Articulos'); ?></h3>
	<?php if (!empty($tiposArticulo['Articulo'])): ?>
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
	<?php foreach ($tiposArticulo['Articulo'] as $articulo): ?>
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
