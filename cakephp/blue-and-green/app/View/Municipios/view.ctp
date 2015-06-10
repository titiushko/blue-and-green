<div class="municipios view">
<h2><?php echo __('Municipio'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo Municipio'); ?></dt>
		<dd>
			<?php echo h($municipio['Municipio']['codigo_municipio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Municipio'); ?></dt>
		<dd>
			<?php echo h($municipio['Municipio']['nombre_municipio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($municipio['Departamento']['nombre_departamento'], array('controller' => 'departamentos', 'action' => 'view', $municipio['Departamento']['codigo_departamento'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado Por'); ?></dt>
		<dd>
			<?php echo h($municipio['Municipio']['modificado_por']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultima Modificacion'); ?></dt>
		<dd>
			<?php echo h($municipio['Municipio']['ultima_modificacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Municipio'), array('action' => 'edit', $municipio['Municipio']['codigo_municipio'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Municipio'), array('action' => 'delete', $municipio['Municipio']['codigo_municipio']), array(), __('Are you sure you want to delete # %s?', $municipio['Municipio']['codigo_municipio'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
