<div class="pedidos index">
	<h2><?php echo __('Pedidos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('codigo_pedido'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_pedido'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_entrega_pedido'); ?></th>
			<th><?php echo $this->Paginator->sort('lugar_entrega_pedido'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad_pedido'); ?></th>
			<th><?php echo $this->Paginator->sort('monto_pedido'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_persona'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_comentario'); ?></th>
			<th><?php echo $this->Paginator->sort('modificado_por'); ?></th>
			<th><?php echo $this->Paginator->sort('ultima_modificacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pedidos as $pedido): ?>
	<tr>
		<td><?php echo h($pedido['Pedido']['codigo_pedido']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['fecha_pedido']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['fecha_entrega_pedido']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['lugar_entrega_pedido']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['cantidad_pedido']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['monto_pedido']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pedido['Persona']['facebook_persona'], array('controller' => 'personas', 'action' => 'view', $pedido['Persona']['codigo_persona'])); ?>
		</td>
		<td><?php echo h($pedido['Pedido']['codigo_comentario']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['modificado_por']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['ultima_modificacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pedido['Pedido']['codigo_pedido'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pedido['Pedido']['codigo_pedido'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pedido['Pedido']['codigo_pedido']), array('confirm' => __('Are you sure you want to delete # %s?', $pedido['Pedido']['codigo_pedido']))); ?>
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
		<li><?php echo $this->Html->link(__('New Pedido'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('controller' => 'articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articulo'), array('controller' => 'articulos', 'action' => 'add')); ?> </li>
	</ul>
</div>
