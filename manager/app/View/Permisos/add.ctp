<div class="permisos form">
<?php echo $this->Form->create('Permiso'); ?>
	<fieldset>
		<legend><?php echo __('Add Permiso'); ?></legend>
	<?php
		echo $this->Form->input('nombre_permiso');
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

		<li><?php echo $this->Html->link(__('List Permisos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
