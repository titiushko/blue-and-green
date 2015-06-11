<div class="departamentos index">
	<h2><?php echo __('Departamentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('codigo_departamento'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_departamento'); ?></th>
			<th><?php echo $this->Paginator->sort('modificado_por'); ?></th>
			<th><?php echo $this->Paginator->sort('ultima_modificacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($departamentos as $departamento): ?>
	<tr>
		<td><?php echo h($departamento['Departamento']['codigo_departamento']); ?>&nbsp;</td>
		<td><?php echo h($departamento['Departamento']['nombre_departamento']); ?>&nbsp;</td>
		<td><?php echo h($departamento['Departamento']['modificado_por']); ?>&nbsp;</td>
		<td><?php echo h($departamento['Departamento']['ultima_modificacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $departamento['Departamento']['codigo_departamento'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $departamento['Departamento']['codigo_departamento'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $departamento['Departamento']['codigo_departamento']), array('confirm' => __('Are you sure you want to delete # %s?', $departamento['Departamento']['codigo_departamento']))); ?>
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
		<li><?php echo $this->Html->link(__('New Departamento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio'), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
	</ul>
</div>
