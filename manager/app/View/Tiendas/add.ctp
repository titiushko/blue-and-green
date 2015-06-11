<div class="tiendas form">
<?php echo $this->Form->create('Tienda'); ?>
	<fieldset>
		<legend><?php echo __('Add Tienda'); ?></legend>
	<?php
		echo $this->Form->input('nombre_tienda');
		echo $this->Form->input('estilo_tienda');
		echo $this->Form->input('direccion_tienda');
		echo $this->Form->input('codigo_departamento');
		echo $this->Form->input('codigo_municipio');
		echo $this->Form->input('codigo_comentario');
		echo $this->Form->input('modificado_por');
		echo $this->Form->input('ultima_modificacion');
		echo $this->Form->input('Articulo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tiendas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('controller' => 'articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articulo'), array('controller' => 'articulos', 'action' => 'add')); ?> </li>
	</ul>
</div>
