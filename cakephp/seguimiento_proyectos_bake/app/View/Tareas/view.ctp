<div class="tareas view">
<h2><?php echo __('Tarea'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo Tarea'); ?></dt>
		<dd>
			<?php echo h($tarea['Tarea']['codigo_tarea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Tarea'); ?></dt>
		<dd>
			<?php echo h($tarea['Tarea']['nombre_tarea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Tarea'); ?></dt>
		<dd>
			<?php echo h($tarea['Tarea']['descripcion_tarea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proyecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tarea['Proyecto']['nombre_proyecto'], array('controller' => 'proyectos', 'action' => 'view', $tarea['Proyecto']['codigo_proyecto'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tarea'), array('action' => 'edit', $tarea['Tarea']['codigo_tarea'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tarea'), array('action' => 'delete', $tarea['Tarea']['codigo_tarea']), array(), __('Are you sure you want to delete # %s?', $tarea['Tarea']['codigo_tarea'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tareas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarea'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Responsables'); ?></h3>
	<?php if (!empty($tarea['Responsable'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Codigo Responsable'); ?></th>
		<th><?php echo __('Codigo Tarea'); ?></th>
		<th><?php echo __('Codigo Usuario'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tarea['Responsable'] as $responsable): ?>
		<tr>
			<td><?php echo $responsable['codigo_responsable']; ?></td>
			<td><?php echo $responsable['codigo_tarea']; ?></td>
			<td><?php echo $responsable['codigo_usuario']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'responsables', 'action' => 'view', $responsable['codigo_responsable'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'responsables', 'action' => 'edit', $responsable['codigo_responsable'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'responsables', 'action' => 'delete', $responsable['codigo_responsable']), array(), __('Are you sure you want to delete # %s?', $responsable['codigo_responsable'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
