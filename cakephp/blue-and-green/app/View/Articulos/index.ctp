<div class="articulos index">
	<h2><?php echo __('Articulos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('codigo_articulo'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_articulo'); ?></th>
			<th><?php echo $this->Paginator->sort('estilo_articulo'); ?></th>
			<th><?php echo $this->Paginator->sort('talla_articulo'); ?></th>
			<th><?php echo $this->Paginator->sort('color_articulo'); ?></th>
			<th><?php echo $this->Paginator->sort('marca_articulo'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad_articulo'); ?></th>
			<th><?php echo $this->Paginator->sort('precio_compra_articulo'); ?></th>
			<th><?php echo $this->Paginator->sort('precio_venta_articulo'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_tipo_articulo'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_comentario'); ?></th>
			<th><?php echo $this->Paginator->sort('modificado_por'); ?></th>
			<th><?php echo $this->Paginator->sort('ultima_modificacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($articulos as $articulo): ?>
	<tr>
		<td><?php echo h($articulo['Articulo']['codigo_articulo']); ?>&nbsp;</td>
		<td><?php echo h($articulo['Articulo']['nombre_articulo']); ?>&nbsp;</td>
		<td><?php echo h($articulo['Articulo']['estilo_articulo']); ?>&nbsp;</td>
		<td><?php echo h($articulo['Articulo']['talla_articulo']); ?>&nbsp;</td>
		<td><?php echo h($articulo['Articulo']['color_articulo']); ?>&nbsp;</td>
		<td><?php echo h($articulo['Articulo']['marca_articulo']); ?>&nbsp;</td>
		<td><?php echo h($articulo['Articulo']['cantidad_articulo']); ?>&nbsp;</td>
		<td><?php echo h($articulo['Articulo']['precio_compra_articulo']); ?>&nbsp;</td>
		<td><?php echo h($articulo['Articulo']['precio_venta_articulo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($articulo['TiposArticulo']['nombre_tipo_articulo'], array('controller' => 'tipos_articulos', 'action' => 'view', $articulo['TiposArticulo']['codigo_tipo_articulo'])); ?>
		</td>
		<td><?php echo h($articulo['Articulo']['codigo_comentario']); ?>&nbsp;</td>
		<td><?php echo h($articulo['Articulo']['modificado_por']); ?>&nbsp;</td>
		<td><?php echo h($articulo['Articulo']['ultima_modificacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $articulo['Articulo']['codigo_articulo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $articulo['Articulo']['codigo_articulo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $articulo['Articulo']['codigo_articulo']), array('confirm' => __('Are you sure you want to delete # %s?', $articulo['Articulo']['codigo_articulo']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Articulo'), array('action' => 'add')); ?></li>
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
