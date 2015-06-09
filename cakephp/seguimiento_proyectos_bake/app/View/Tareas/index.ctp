<div class="tareas index">
	<h2><?php echo __('Tareas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('codigo_tarea'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_tarea'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion_tarea'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_proyecto'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tareas as $tarea): ?>
	<tr>
		<td><?php echo h($tarea['Tarea']['codigo_tarea']); ?>&nbsp;</td>
		<td><?php echo h($tarea['Tarea']['nombre_tarea']); ?>&nbsp;</td>
		<td><?php echo h($tarea['Tarea']['descripcion_tarea']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tarea['Proyecto']['nombre_proyecto'], array('controller' => 'proyectos', 'action' => 'view', $tarea['Proyecto']['codigo_proyecto'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tarea['Tarea']['codigo_tarea'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tarea['Tarea']['codigo_tarea'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tarea['Tarea']['codigo_tarea']), array('confirm' => __('Are you sure you want to delete # %s?', $tarea['Tarea']['codigo_tarea']))); ?>
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
		<li><?php echo $this->Html->link(__('New Tarea'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
	</ul>
</div>
