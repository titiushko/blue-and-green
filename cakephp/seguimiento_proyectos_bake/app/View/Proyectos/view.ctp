<div class="proyectos view">
<h2><?php echo __('Proyecto'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo Proyecto'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['codigo_proyecto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Proyecto'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['nombre_proyecto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Proyecto'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['descripcion_proyecto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inicio Proyecto'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['inicio_proyecto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin Proyecto'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['fin_proyecto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proyecto['Usuario']['codigo_usuario'], array('controller' => 'usuarios', 'action' => 'view', $proyecto['Usuario']['codigo_usuario'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proyecto'), array('action' => 'edit', $proyecto['Proyecto']['codigo_proyecto'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proyecto'), array('action' => 'delete', $proyecto['Proyecto']['codigo_proyecto']), array(), __('Are you sure you want to delete # %s?', $proyecto['Proyecto']['codigo_proyecto'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tareas'); ?></h3>
	<?php if (!empty($proyecto['Tarea'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Codigo Tarea'); ?></th>
		<th><?php echo __('Nombre Tarea'); ?></th>
		<th><?php echo __('Descripcion Tarea'); ?></th>
		<th><?php echo __('Codigo Proyecto'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proyecto['Tarea'] as $tarea): ?>
		<tr>
			<td><?php echo $tarea['codigo_tarea']; ?></td>
			<td><?php echo $tarea['nombre_tarea']; ?></td>
			<td><?php echo $tarea['descripcion_tarea']; ?></td>
			<td><?php echo $tarea['codigo_proyecto']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tareas', 'action' => 'view', $tarea['codigo_tarea'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tareas', 'action' => 'edit', $tarea['codigo_tarea'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tareas', 'action' => 'delete', $tarea['codigo_tarea']), array(), __('Are you sure you want to delete # %s?', $tarea['codigo_tarea'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
