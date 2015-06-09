<div class="responsables view">
<h2><?php echo __('Responsable'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo Responsable'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['codigo_responsable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tarea'); ?></dt>
		<dd>
			<?php echo $this->Html->link($responsable['Tarea']['nombre_tarea'], array('controller' => 'tareas', 'action' => 'view', $responsable['Tarea']['codigo_tarea'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($responsable['Usuario']['codigo_usuario'], array('controller' => 'usuarios', 'action' => 'view', $responsable['Usuario']['codigo_usuario'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Responsable'), array('action' => 'edit', $responsable['Responsable']['codigo_responsable'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Responsable'), array('action' => 'delete', $responsable['Responsable']['codigo_responsable']), array(), __('Are you sure you want to delete # %s?', $responsable['Responsable']['codigo_responsable'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
