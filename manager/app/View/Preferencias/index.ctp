<div class="preferencias index">
	<h2><?php echo __('Preferencias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('codigo_preferencia'); ?></th>
			<th><?php echo $this->Paginator->sort('talla_preferencia'); ?></th>
			<th><?php echo $this->Paginator->sort('color_preferencia'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_tipo_articulo'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_comentario'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_persona'); ?></th>
			<th><?php echo $this->Paginator->sort('modificado_por'); ?></th>
			<th><?php echo $this->Paginator->sort('ultima_modificacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($preferencias as $preferencia): ?>
	<tr>
		<td><?php echo h($preferencia['Preferencia']['codigo_preferencia']); ?>&nbsp;</td>
		<td><?php echo h($preferencia['Preferencia']['talla_preferencia']); ?>&nbsp;</td>
		<td><?php echo h($preferencia['Preferencia']['color_preferencia']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($preferencia['TiposArticulo']['nombre_tipo_articulo'], array('controller' => 'tipos_articulos', 'action' => 'view', $preferencia['TiposArticulo']['codigo_tipo_articulo'])); ?>
		</td>
		<td><?php echo h($preferencia['Preferencia']['codigo_comentario']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($preferencia['Persona']['facebook_persona'], array('controller' => 'personas', 'action' => 'view', $preferencia['Persona']['codigo_persona'])); ?>
		</td>
		<td><?php echo h($preferencia['Preferencia']['modificado_por']); ?>&nbsp;</td>
		<td><?php echo h($preferencia['Preferencia']['ultima_modificacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $preferencia['Preferencia']['codigo_preferencia'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $preferencia['Preferencia']['codigo_preferencia'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $preferencia['Preferencia']['codigo_preferencia']), array('confirm' => __('Are you sure you want to delete # %s?', $preferencia['Preferencia']['codigo_preferencia']))); ?>
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
		<li><?php echo $this->Html->link(__('New Preferencia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipos Articulos'), array('controller' => 'tipos_articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Articulo'), array('controller' => 'tipos_articulos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
