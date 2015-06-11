<div class="usuarios index">
	<h2><?php echo __('Usuarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('codigo_usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('password_usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_expiracion_usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('bloqueado_usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('razon_bloqueado_usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('reiniciar_password_usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('inactivo_usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('ultima_fecha_sesion_usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_persona'); ?></th>
			<th><?php echo $this->Paginator->sort('modificado_por'); ?></th>
			<th><?php echo $this->Paginator->sort('ultima_modificacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?php echo h($usuario['Usuario']['codigo_usuario']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['nombre_usuario']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['password_usuario']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['fecha_expiracion_usuario']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['bloqueado_usuario']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['razon_bloqueado_usuario']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['reiniciar_password_usuario']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['inactivo_usuario']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['ultima_fecha_sesion_usuario']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['codigo_persona']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['modificado_por']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['ultima_modificacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usuario['Usuario']['codigo_usuario'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usuario['Usuario']['codigo_usuario'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usuario['Usuario']['codigo_usuario']), array('confirm' => __('Are you sure you want to delete # %s?', $usuario['Usuario']['codigo_usuario']))); ?>
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
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
