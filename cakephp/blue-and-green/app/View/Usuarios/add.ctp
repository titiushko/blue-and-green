<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Add Usuario'); ?></legend>
	<?php
		echo $this->Form->input('nombre_usuario');
		echo $this->Form->input('password_usuario');
		echo $this->Form->input('fecha_expiracion_usuario');
		echo $this->Form->input('bloqueado_usuario');
		echo $this->Form->input('razon_bloqueado_usuario');
		echo $this->Form->input('reiniciar_password_usuario');
		echo $this->Form->input('inactivo_usuario');
		echo $this->Form->input('ultima_fecha_sesion_usuario');
		echo $this->Form->input('codigo_persona');
		echo $this->Form->input('modificado_por');
		echo $this->Form->input('ultima_modificacion');
		echo $this->Form->input('Role');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
