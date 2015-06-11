<div class="preferencias form">
<?php echo $this->Form->create('Preferencia'); ?>
	<fieldset>
		<legend><?php echo __('Add Preferencia'); ?></legend>
	<?php
		echo $this->Form->input('talla_preferencia');
		echo $this->Form->input('color_preferencia');
		echo $this->Form->input('codigo_tipo_articulo');
		echo $this->Form->input('codigo_comentario');
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

		<li><?php echo $this->Html->link(__('List Preferencias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipos Articulos'), array('controller' => 'tipos_articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Articulo'), array('controller' => 'tipos_articulos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
