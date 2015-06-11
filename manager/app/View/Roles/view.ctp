<div class="roles view">
<h2><?php echo __('Role'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo Rol'); ?></dt>
		<dd>
			<?php echo h($role['Role']['codigo_rol']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Rol'); ?></dt>
		<dd>
			<?php echo h($role['Role']['nombre_rol']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado Por'); ?></dt>
		<dd>
			<?php echo h($role['Role']['modificado_por']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultima Modificacion'); ?></dt>
		<dd>
			<?php echo h($role['Role']['ultima_modificacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Role'), array('action' => 'edit', $role['Role']['codigo_rol'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Role'), array('action' => 'delete', $role['Role']['codigo_rol']), array(), __('Are you sure you want to delete # %s?', $role['Role']['codigo_rol'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Permisos'), array('controller' => 'permisos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permiso'), array('controller' => 'permisos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Permisos'); ?></h3>
	<?php if (!empty($role['Permiso'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Codigo Permiso'); ?></th>
		<th><?php echo __('Nombre Permiso'); ?></th>
		<th><?php echo __('Modificado Por'); ?></th>
		<th><?php echo __('Ultima Modificacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($role['Permiso'] as $permiso): ?>
		<tr>
			<td><?php echo $permiso['codigo_permiso']; ?></td>
			<td><?php echo $permiso['nombre_permiso']; ?></td>
			<td><?php echo $permiso['modificado_por']; ?></td>
			<td><?php echo $permiso['ultima_modificacion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'permisos', 'action' => 'view', $permiso['codigo_permiso'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'permisos', 'action' => 'edit', $permiso['codigo_permiso'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'permisos', 'action' => 'delete', $permiso['codigo_permiso']), array(), __('Are you sure you want to delete # %s?', $permiso['codigo_permiso'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Permiso'), array('controller' => 'permisos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Usuarios'); ?></h3>
	<?php if (!empty($role['Usuario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Codigo Usuario'); ?></th>
		<th><?php echo __('Nombre Usuario'); ?></th>
		<th><?php echo __('Password Usuario'); ?></th>
		<th><?php echo __('Fecha Expiracion Usuario'); ?></th>
		<th><?php echo __('Bloqueado Usuario'); ?></th>
		<th><?php echo __('Razon Bloqueado Usuario'); ?></th>
		<th><?php echo __('Reiniciar Password Usuario'); ?></th>
		<th><?php echo __('Inactivo Usuario'); ?></th>
		<th><?php echo __('Ultima Fecha Sesion Usuario'); ?></th>
		<th><?php echo __('Codigo Persona'); ?></th>
		<th><?php echo __('Modificado Por'); ?></th>
		<th><?php echo __('Ultima Modificacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($role['Usuario'] as $usuario): ?>
		<tr>
			<td><?php echo $usuario['codigo_usuario']; ?></td>
			<td><?php echo $usuario['nombre_usuario']; ?></td>
			<td><?php echo $usuario['password_usuario']; ?></td>
			<td><?php echo $usuario['fecha_expiracion_usuario']; ?></td>
			<td><?php echo $usuario['bloqueado_usuario']; ?></td>
			<td><?php echo $usuario['razon_bloqueado_usuario']; ?></td>
			<td><?php echo $usuario['reiniciar_password_usuario']; ?></td>
			<td><?php echo $usuario['inactivo_usuario']; ?></td>
			<td><?php echo $usuario['ultima_fecha_sesion_usuario']; ?></td>
			<td><?php echo $usuario['codigo_persona']; ?></td>
			<td><?php echo $usuario['modificado_por']; ?></td>
			<td><?php echo $usuario['ultima_modificacion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usuarios', 'action' => 'view', $usuario['codigo_usuario'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usuarios', 'action' => 'edit', $usuario['codigo_usuario'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usuarios', 'action' => 'delete', $usuario['codigo_usuario']), array(), __('Are you sure you want to delete # %s?', $usuario['codigo_usuario'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
