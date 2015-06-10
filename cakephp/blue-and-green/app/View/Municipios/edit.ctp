<div class="municipios form">
<?php echo $this->Form->create('Municipio'); ?>
	<fieldset>
		<legend><?php echo __('Edit Municipio'); ?></legend>
	<?php
		echo $this->Form->input('codigo_municipio');
		echo $this->Form->input('nombre_municipio');
		echo $this->Form->input('codigo_departamento');
		echo $this->Form->input('modificado_por');
		echo $this->Form->input('ultima_modificacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Municipio.codigo_municipio')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Municipio.codigo_municipio'))); ?></li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
