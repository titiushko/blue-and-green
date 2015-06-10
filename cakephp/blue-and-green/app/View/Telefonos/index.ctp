<div class="telefonos index">
	<h2><?php echo __('Telefonos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('codigo_telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_persona'); ?></th>
			<th><?php echo $this->Paginator->sort('modificado_por'); ?></th>
			<th><?php echo $this->Paginator->sort('ultima_modificacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($telefonos as $telefono): ?>
	<tr>
		<td><?php echo h($telefono['Telefono']['codigo_telefono']); ?>&nbsp;</td>
		<td><?php echo h($telefono['Telefono']['numero_telefono']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($telefono['Persona']['facebook_persona'], array('controller' => 'personas', 'action' => 'view', $telefono['Persona']['codigo_persona'])); ?>
		</td>
		<td><?php echo h($telefono['Telefono']['modificado_por']); ?>&nbsp;</td>
		<td><?php echo h($telefono['Telefono']['ultima_modificacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $telefono['Telefono']['codigo_telefono'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $telefono['Telefono']['codigo_telefono'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $telefono['Telefono']['codigo_telefono']), array('confirm' => __('Are you sure you want to delete # %s?', $telefono['Telefono']['codigo_telefono']))); ?>
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
		<li><?php echo $this->Html->link(__('New Telefono'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
