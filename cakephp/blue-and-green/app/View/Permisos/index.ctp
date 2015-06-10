<div class="permisos index">
	<h2><?php echo __('Permisos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('codigo_permiso'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_permiso'); ?></th>
			<th><?php echo $this->Paginator->sort('modificado_por'); ?></th>
			<th><?php echo $this->Paginator->sort('ultima_modificacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($permisos as $permiso): ?>
	<tr>
		<td><?php echo h($permiso['Permiso']['codigo_permiso']); ?>&nbsp;</td>
		<td><?php echo h($permiso['Permiso']['nombre_permiso']); ?>&nbsp;</td>
		<td><?php echo h($permiso['Permiso']['modificado_por']); ?>&nbsp;</td>
		<td><?php echo h($permiso['Permiso']['ultima_modificacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $permiso['Permiso']['codigo_permiso'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $permiso['Permiso']['codigo_permiso'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $permiso['Permiso']['codigo_permiso']), array('confirm' => __('Are you sure you want to delete # %s?', $permiso['Permiso']['codigo_permiso']))); ?>
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
		<li><?php echo $this->Html->link(__('New Permiso'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
