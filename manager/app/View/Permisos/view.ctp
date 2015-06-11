<div class="permisos view">
<h2><?php echo __('Permiso'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo Permiso'); ?></dt>
		<dd>
			<?php echo h($permiso['Permiso']['codigo_permiso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Permiso'); ?></dt>
		<dd>
			<?php echo h($permiso['Permiso']['nombre_permiso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado Por'); ?></dt>
		<dd>
			<?php echo h($permiso['Permiso']['modificado_por']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultima Modificacion'); ?></dt>
		<dd>
			<?php echo h($permiso['Permiso']['ultima_modificacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Permiso'), array('action' => 'edit', $permiso['Permiso']['codigo_permiso'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Permiso'), array('action' => 'delete', $permiso['Permiso']['codigo_permiso']), array(), __('Are you sure you want to delete # %s?', $permiso['Permiso']['codigo_permiso'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Permisos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permiso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Roles'); ?></h3>
	<?php if (!empty($permiso['Role'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Codigo Rol'); ?></th>
		<th><?php echo __('Nombre Rol'); ?></th>
		<th><?php echo __('Modificado Por'); ?></th>
		<th><?php echo __('Ultima Modificacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($permiso['Role'] as $role): ?>
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
