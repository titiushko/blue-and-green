<div class="pedidos form">
<?php echo $this->Form->create('Pedido'); ?>
	<fieldset>
		<legend><?php echo __('Add Pedido'); ?></legend>
	<?php
		echo $this->Form->input('fecha_pedido');
		echo $this->Form->input('fecha_entrega_pedido');
		echo $this->Form->input('lugar_entrega_pedido');
		echo $this->Form->input('cantidad_pedido');
		echo $this->Form->input('monto_pedido');
		echo $this->Form->input('codigo_persona');
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

		<li><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('controller' => 'articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articulo'), array('controller' => 'articulos', 'action' => 'add')); ?> </li>
	</ul>
</div>
