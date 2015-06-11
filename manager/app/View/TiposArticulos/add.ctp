<div class="tiposArticulos form">
<?php echo $this->Form->create('TiposArticulo'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipos Articulo'); ?></legend>
	<?php
		echo $this->Form->input('nombre_tipo_articulo');
		echo $this->Form->input('modificado_por');
		echo $this->Form->input('ultima_modificacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipos Articulos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('controller' => 'articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articulo'), array('controller' => 'articulos', 'action' => 'add')); ?> </li>
	</ul>
</div>
