<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['codigo_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nombre_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['password_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Expiracion Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['fecha_expiracion_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bloqueado Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['bloqueado_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Razon Bloqueado Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['razon_bloqueado_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reiniciar Password Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['reiniciar_password_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inactivo Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['inactivo_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultima Fecha Sesion Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['ultima_fecha_sesion_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Persona'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['codigo_persona']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado Por'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['modificado_por']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultima Modificacion'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['ultima_modificacion']); ?>
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
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Roles'); ?></h3>
	<?php if (!empty($usuario['Role'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Codigo Rol'); ?></th>
		<th><?php echo __('Nombre Rol'); ?></th>
		<th><?php echo __('Modificado Por'); ?></th>
		<th><?php echo __('Ultima Modificacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuario['Role'] as $role): ?>
		<tr>
			<td><?php echo $role['codigo_rol']; ?></td>
			<td><?php echo $role['nombre_rol']; ?></td>
			<td><?php echo $role['modificado_por']; ?></td>
			<td><?php echo $role['ultima_modificacion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'roles', 'action' => 'view', $role['codigo_rol'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'roles', 'action' => 'edit', $role['codigo_rol'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'roles', 'action' => 'delete', $role['codigo_rol']), array(), __('Are you sure you want to delete # %s?', $role['codigo_rol'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
