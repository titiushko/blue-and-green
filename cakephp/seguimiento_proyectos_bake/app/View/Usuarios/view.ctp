<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['codigo_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nombres_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['apellidos_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nacimiento Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nacimiento_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['password_usuario']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['codigo_usuario'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['codigo_usuario']), array(), __('Are you sure you want to delete # %s?', $usuario['Usuario']['codigo_usuario'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Proyectos'); ?></h3>
	<?php if (!empty($usuario['Proyecto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Codigo Proyecto'); ?></th>
		<th><?php echo __('Nombre Proyecto'); ?></th>
		<th><?php echo __('Descripcion Proyecto'); ?></th>
		<th><?php echo __('Inicio Proyecto'); ?></th>
		<th><?php echo __('Fin Proyecto'); ?></th>
		<th><?php echo __('Responsable Proyecto'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuario['Proyecto'] as $proyecto): ?>
		<tr>
			<td><?php echo $proyecto['codigo_proyecto']; ?></td>
			<td><?php echo $proyecto['nombre_proyecto']; ?></td>
			<td><?php echo $proyecto['descripcion_proyecto']; ?></td>
			<td><?php echo $proyecto['inicio_proyecto']; ?></td>
			<td><?php echo $proyecto['fin_proyecto']; ?></td>
			<td><?php echo $proyecto['responsable_proyecto']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'proyectos', 'action' => 'view', $proyecto['codigo_proyecto'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'proyectos', 'action' => 'edit', $proyecto['codigo_proyecto'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'proyectos', 'action' => 'delete', $proyecto['codigo_proyecto']), array(), __('Are you sure you want to delete # %s?', $proyecto['codigo_proyecto'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Responsables'); ?></h3>
	<?php if (!empty($usuario['Responsable'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Codigo Responsable'); ?></th>
		<th><?php echo __('Codigo Tarea'); ?></th>
		<th><?php echo __('Codigo Usuario'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuario['Responsable'] as $responsable): ?>
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
