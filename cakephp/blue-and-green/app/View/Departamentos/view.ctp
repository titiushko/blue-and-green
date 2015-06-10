<div class="departamentos view">
<h2><?php echo __('Departamento'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo Departamento'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['codigo_departamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Departamento'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['nombre_departamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado Por'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['modificado_por']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultima Modificacion'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['ultima_modificacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Departamento'), array('action' => 'edit', $departamento['Departamento']['codigo_departamento'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Departamento'), array('action' => 'delete', $departamento['Departamento']['codigo_departamento']), array(), __('Are you sure you want to delete # %s?', $departamento['Departamento']['codigo_departamento'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio'), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Municipios'); ?></h3>
	<?php if (!empty($departamento['Municipio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Codigo Municipio'); ?></th>
		<th><?php echo __('Nombre Municipio'); ?></th>
		<th><?php echo __('Codigo Departamento'); ?></th>
		<th><?php echo __('Modificado Por'); ?></th>
		<th><?php echo __('Ultima Modificacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($departamento['Municipio'] as $municipio): ?>
		<tr>
			<td><?php echo $municipio['codigo_municipio']; ?></td>
			<td><?php echo $municipio['nombre_municipio']; ?></td>
			<td><?php echo $municipio['codigo_departamento']; ?></td>
			<td><?php echo $municipio['modificado_por']; ?></td>
			<td><?php echo $municipio['ultima_modificacion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'municipios', 'action' => 'view', $municipio['codigo_municipio'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'municipios', 'action' => 'edit', $municipio['codigo_municipio'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'municipios', 'action' => 'delete', $municipio['codigo_municipio']), array(), __('Are you sure you want to delete # %s?', $municipio['codigo_municipio'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Municipio'), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
