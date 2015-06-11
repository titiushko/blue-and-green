<div class="tiposArticulos index">
	<h2><?php echo __('Tipos Articulos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('codigo_tipo_articulo'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_tipo_articulo'); ?></th>
			<th><?php echo $this->Paginator->sort('modificado_por'); ?></th>
			<th><?php echo $this->Paginator->sort('ultima_modificacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tiposArticulos as $tiposArticulo): ?>
	<tr>
		<td><?php echo h($tiposArticulo['TiposArticulo']['codigo_tipo_articulo']); ?>&nbsp;</td>
		<td><?php echo h($tiposArticulo['TiposArticulo']['nombre_tipo_articulo']); ?>&nbsp;</td>
		<td><?php echo h($tiposArticulo['TiposArticulo']['modificado_por']); ?>&nbsp;</td>
		<td><?php echo h($tiposArticulo['TiposArticulo']['ultima_modificacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tiposArticulo['TiposArticulo']['codigo_tipo_articulo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tiposArticulo['TiposArticulo']['codigo_tipo_articulo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tiposArticulo['TiposArticulo']['codigo_tipo_articulo']), array('confirm' => __('Are you sure you want to delete # %s?', $tiposArticulo['TiposArticulo']['codigo_tipo_articulo']))); ?>
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
		<li><?php echo $this->Html->link(__('New Tipos Articulo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('controller' => 'articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articulo'), array('controller' => 'articulos', 'action' => 'add')); ?> </li>
	</ul>
</div>
