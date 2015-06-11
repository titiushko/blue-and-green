<div class="personas index">
	<h2><?php echo __('Personas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('codigo_persona'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres_persona'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos_persona'); ?></th>
			<th><?php echo $this->Paginator->sort('apodo_persona'); ?></th>
			<th><?php echo $this->Paginator->sort('dui_persona'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo_persona'); ?></th>
			<th><?php echo $this->Paginator->sort('correo_electronico_persona'); ?></th>
			<th><?php echo $this->Paginator->sort('facebook_persona'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_departamento'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_municipio'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_comentario'); ?></th>
			<th><?php echo $this->Paginator->sort('modificado_por'); ?></th>
			<th><?php echo $this->Paginator->sort('ultima_modificacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($personas as $persona): ?>
	<tr>
		<td><?php echo h($persona['Persona']['codigo_persona']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['nombres_persona']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['apellidos_persona']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['apodo_persona']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['dui_persona']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['sexo_persona']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['correo_electronico_persona']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['facebook_persona']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['codigo_departamento']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['codigo_municipio']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['codigo_comentario']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['modificado_por']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['ultima_modificacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $persona['Persona']['codigo_persona'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $persona['Persona']['codigo_persona'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $persona['Persona']['codigo_persona']), array('confirm' => __('Are you sure you want to delete # %s?', $persona['Persona']['codigo_persona']))); ?>
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
		<li><?php echo $this->Html->link(__('New Persona'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Telefonos'), array('controller' => 'telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Telefono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Preferencias'), array('controller' => 'preferencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Preferencia'), array('controller' => 'preferencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
