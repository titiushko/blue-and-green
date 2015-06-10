<div class="telefonos view">
<h2><?php echo __('Telefono'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo Telefono'); ?></dt>
		<dd>
			<?php echo h($telefono['Telefono']['codigo_telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Telefono'); ?></dt>
		<dd>
			<?php echo h($telefono['Telefono']['numero_telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($telefono['Persona']['facebook_persona'], array('controller' => 'personas', 'action' => 'view', $telefono['Persona']['codigo_persona'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado Por'); ?></dt>
		<dd>
			<?php echo h($telefono['Telefono']['modificado_por']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultima Modificacion'); ?></dt>
		<dd>
			<?php echo h($telefono['Telefono']['ultima_modificacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Telefono'), array('action' => 'edit', $telefono['Telefono']['codigo_telefono'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Telefono'), array('action' => 'delete', $telefono['Telefono']['codigo_telefono']), array(), __('Are you sure you want to delete # %s?', $telefono['Telefono']['codigo_telefono'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Telefonos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Telefono'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
