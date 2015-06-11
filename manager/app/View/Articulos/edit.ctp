<div class="articulos form">
<?php echo $this->Form->create('Articulo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Articulo'); ?></legend>
	<?php
		echo $this->Form->input('codigo_articulo');
		echo $this->Form->input('nombre_articulo');
		echo $this->Form->input('estilo_articulo');
		echo $this->Form->input('talla_articulo');
		echo $this->Form->input('color_articulo');
		echo $this->Form->input('marca_articulo');
		echo $this->Form->input('cantidad_articulo');
		echo $this->Form->input('precio_compra_articulo');
		echo $this->Form->input('precio_venta_articulo');
		echo $this->Form->input('codigo_tipo_articulo');
		echo $this->Form->input('codigo_comentario');
		echo $this->Form->input('modificado_por');
		echo $this->Form->input('ultima_modificacion');
		echo $this->Form->input('Tienda');
		echo $this->Form->input('Pedido');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Articulo.codigo_articulo')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Articulo.codigo_articulo'))); ?></li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipos Articulos'), array('controller' => 'tipos_articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Articulo'), array('controller' => 'tipos_articulos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiendas'), array('controller' => 'tiendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tienda'), array('controller' => 'tiendas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
