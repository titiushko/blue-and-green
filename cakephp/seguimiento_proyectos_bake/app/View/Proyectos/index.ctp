<div class="proyectos index">
	<h2><?php echo __('Proyectos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('codigo_proyecto'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_proyecto'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion_proyecto'); ?></th>
			<th><?php echo $this->Paginator->sort('inicio_proyecto'); ?></th>
			<th><?php echo $this->Paginator->sort('fin_proyecto'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable_proyecto'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($proyectos as $proyecto): ?>
	<tr>
		<td><?php echo h($proyecto['Proyecto']['codigo_proyecto']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['nombre_proyecto']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['descripcion_proyecto']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['inicio_proyecto']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['fin_proyecto']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proyecto['Usuario']['codigo_usuario'], array('controller' => 'usuarios', 'action' => 'view', $proyecto['Usuario']['codigo_usuario'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $proyecto['Proyecto']['codigo_proyecto'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $proyecto['Proyecto']['codigo_proyecto'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $proyecto['Proyecto']['codigo_proyecto']), array('confirm' => __('Are you sure you want to delete # %s?', $proyecto['Proyecto']['codigo_proyecto']))); ?>
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
		<li><?php echo $this->Html->link(__('New Proyecto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
