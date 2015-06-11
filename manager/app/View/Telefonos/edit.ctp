<div class="telefonos form">
<?php echo $this->Form->create('Telefono'); ?>
	<fieldset>
		<legend><?php echo __('Edit Telefono'); ?></legend>
	<?php
		echo $this->Form->input('codigo_telefono');
		echo $this->Form->input('numero_telefono');
		echo $this->Form->input('codigo_persona');
		echo $this->Form->input('modificado_por');
		echo $this->Form->input('ultima_modificacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Telefono.codigo_telefono')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Telefono.codigo_telefono'))); ?></li>
		<li><?php echo $this->Html->link(__('List Telefonos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
