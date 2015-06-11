<div class="preferencias view">
<h2><?php echo __('Preferencia'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo Preferencia'); ?></dt>
		<dd>
			<?php echo h($preferencia['Preferencia']['codigo_preferencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talla Preferencia'); ?></dt>
		<dd>
			<?php echo h($preferencia['Preferencia']['talla_preferencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Preferencia'); ?></dt>
		<dd>
			<?php echo h($preferencia['Preferencia']['color_preferencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipos Articulo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($preferencia['TiposArticulo']['nombre_tipo_articulo'], array('controller' => 'tipos_articulos', 'action' => 'view', $preferencia['TiposArticulo']['codigo_tipo_articulo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Comentario'); ?></dt>
		<dd>
			<?php echo h($preferencia['Preferencia']['codigo_comentario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($preferencia['Persona']['facebook_persona'], array('controller' => 'personas', 'action' => 'view', $preferencia['Persona']['codigo_persona'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado Por'); ?></dt>
		<dd>
			<?php echo h($preferencia['Preferencia']['modificado_por']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultima Modificacion'); ?></dt>
		<dd>
			<?php echo h($preferencia['Preferencia']['ultima_modificacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Preferencia'), array('action' => 'edit', $preferencia['Preferencia']['codigo_preferencia'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Preferencia'), array('action' => 'delete', $preferencia['Preferencia']['codigo_preferencia']), array(), __('Are you sure you want to delete # %s?', $preferencia['Preferencia']['codigo_preferencia'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Preferencias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Preferencia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Articulos'), array('controller' => 'tipos_articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Articulo'), array('controller' => 'tipos_articulos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Comentarios'); ?></h3>
	<?php if (!empty($preferencia['Comentario'])): ?>
		<dl>
			<dt><?php echo __('Codigo Comentario'); ?></dt>
		<dd>
	<?php echo $preferencia['Comentario']['codigo_comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Tabla Origen Comentario'); ?></dt>
		<dd>
	<?php echo $preferencia['Comentario']['tabla_origen_comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Codigo Tabla Origen Comentario'); ?></dt>
		<dd>
	<?php echo $preferencia['Comentario']['codigo_tabla_origen_comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Comentario'); ?></dt>
		<dd>
	<?php echo $preferencia['Comentario']['comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Modificado Por'); ?></dt>
		<dd>
	<?php echo $preferencia['Comentario']['modificado_por']; ?>
&nbsp;</dd>
		<dt><?php echo __('Ultima Modificacion'); ?></dt>
		<dd>
	<?php echo $preferencia['Comentario']['ultima_modificacion']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Comentario'), array('controller' => 'comentarios', 'action' => 'edit', $preferencia['Comentario']['codigo_comentario'])); ?></li>
			</ul>
		</div>
	</div>
	