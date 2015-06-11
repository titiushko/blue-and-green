<div class="tiendas index">
	<h2><?php echo __('Tiendas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('codigo_tienda'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_tienda'); ?></th>
			<th><?php echo $this->Paginator->sort('estilo_tienda'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion_tienda'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_departamento'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_municipio'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_comentario'); ?></th>
			<th><?php echo $this->Paginator->sort('modificado_por'); ?></th>
			<th><?php echo $this->Paginator->sort('ultima_modificacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tiendas as $tienda): ?>
	<tr>
		<td><?php echo h($tienda['Tienda']['codigo_tienda']); ?>&nbsp;</td>
		<td><?php echo h($tienda['Tienda']['nombre_tienda']); ?>&nbsp;</td>
		<td><?php echo h($tienda['Tienda']['estilo_tienda']); ?>&nbsp;</td>
		<td><?php echo h($tienda['Tienda']['direccion_tienda']); ?>&nbsp;</td>
		<td><?php echo h($tienda['Tienda']['codigo_departamento']); ?>&nbsp;</td>
		<td><?php echo h($tienda['Tienda']['codigo_municipio']); ?>&nbsp;</td>
		<td><?php echo h($tienda['Tienda']['codigo_comentario']); ?>&nbsp;</td>
		<td><?php echo h($tienda['Tienda']['modificado_por']); ?>&nbsp;</td>
		<td><?php echo h($tienda['Tienda']['ultima_modificacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tienda['Tienda']['codigo_tienda'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tienda['Tienda']['codigo_tienda'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tienda['Tienda']['codigo_tienda']), array('confirm' => __('Are you sure you want to delete # %s?', $tienda['Tienda']['codigo_tienda']))); ?>
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
		<li><?php echo $this->Html->link(__('New Tienda'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('controller' => 'articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articulo'), array('controller' => 'articulos', 'action' => 'add')); ?> </li>
	</ul>
</div>
