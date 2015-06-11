<div class="personas view">
<h2><?php echo __('Persona'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo Persona'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['codigo_persona']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres Persona'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['nombres_persona']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos Persona'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['apellidos_persona']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apodo Persona'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['apodo_persona']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dui Persona'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['dui_persona']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo Persona'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['sexo_persona']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo Electronico Persona'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['correo_electronico_persona']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook Persona'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['facebook_persona']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Departamento'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['codigo_departamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Municipio'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['codigo_municipio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Comentario'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['codigo_comentario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado Por'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['modificado_por']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultima Modificacion'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['ultima_modificacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Persona'), array('action' => 'edit', $persona['Persona']['codigo_persona'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Persona'), array('action' => 'delete', $persona['Persona']['codigo_persona']), array(), __('Are you sure you want to delete # %s?', $persona['Persona']['codigo_persona'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('action' => 'add')); ?> </li>
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
	<div class="related">
		<h3><?php echo __('Related Comentarios'); ?></h3>
	<?php if (!empty($persona['Comentario'])): ?>
		<dl>
			<dt><?php echo __('Codigo Comentario'); ?></dt>
		<dd>
	<?php echo $persona['Comentario']['codigo_comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Tabla Origen Comentario'); ?></dt>
		<dd>
	<?php echo $persona['Comentario']['tabla_origen_comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Codigo Tabla Origen Comentario'); ?></dt>
		<dd>
	<?php echo $persona['Comentario']['codigo_tabla_origen_comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Comentario'); ?></dt>
		<dd>
	<?php echo $persona['Comentario']['comentario']; ?>
&nbsp;</dd>
		<dt><?php echo __('Modificado Por'); ?></dt>
		<dd>
	<?php echo $persona['Comentario']['modificado_por']; ?>
&nbsp;</dd>
		<dt><?php echo __('Ultima Modificacion'); ?></dt>
		<dd>
	<?php echo $persona['Comentario']['ultima_modificacion']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Comentario'), array('controller' => 'comentarios', 'action' => 'edit', $persona['Comentario']['codigo_comentario'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Telefonos'); ?></h3>
	<?php if (!empty($persona['Telefono'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Codigo Telefono'); ?></th>
		<th><?php echo __('Numero Telefono'); ?></th>
		<th><?php echo __('Codigo Persona'); ?></th>
		<th><?php echo __('Modificado Por'); ?></th>
		<th><?php echo __('Ultima Modificacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($persona['Telefono'] as $telefono): ?>
		<tr>
			<td><?php echo $telefono['codigo_telefono']; ?></td>
			<td><?php echo $telefono['numero_telefono']; ?></td>
			<td><?php echo $telefono['codigo_persona']; ?></td>
			<td><?php echo $telefono['modificado_por']; ?></td>
			<td><?php echo $telefono['ultima_modificacion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'telefonos', 'action' => 'view', $telefono['codigo_telefono'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'telefonos', 'action' => 'edit', $telefono['codigo_telefono'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'telefonos', 'action' => 'delete', $telefono['codigo_telefono']), array(), __('Are you sure you want to delete # %s?', $telefono['codigo_telefono'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Telefono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Usuarios'); ?></h3>
	<?php if (!empty($persona['Usuario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Codigo Usuario'); ?></th>
		<th><?php echo __('Nombre Usuario'); ?></th>
		<th><?php echo __('Password Usuario'); ?></th>
		<th><?php echo __('Fecha Expiracion Usuario'); ?></th>
		<th><?php echo __('Bloqueado Usuario'); ?></th>
		<th><?php echo __('Razon Bloqueado Usuario'); ?></th>
		<th><?php echo __('Reiniciar Password Usuario'); ?></th>
		<th><?php echo __('Inactivo Usuario'); ?></th>
		<th><?php echo __('Ultima Fecha Sesion Usuario'); ?></th>
		<th><?php echo __('Codigo Persona'); ?></th>
		<th><?php echo __('Modificado Por'); ?></th>
		<th><?php echo __('Ultima Modificacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($persona['Usuario'] as $usuario): ?>
		<tr>
			<td><?php echo $usuario['codigo_usuario']; ?></td>
			<td><?php echo $usuario['nombre_usuario']; ?></td>
			<td><?php echo $usuario['password_usuario']; ?></td>
			<td><?php echo $usuario['fecha_expiracion_usuario']; ?></td>
			<td><?php echo $usuario['bloqueado_usuario']; ?></td>
			<td><?php echo $usuario['razon_bloqueado_usuario']; ?></td>
			<td><?php echo $usuario['reiniciar_password_usuario']; ?></td>
			<td><?php echo $usuario['inactivo_usuario']; ?></td>
			<td><?php echo $usuario['ultima_fecha_sesion_usuario']; ?></td>
			<td><?php echo $usuario['codigo_persona']; ?></td>
			<td><?php echo $usuario['modificado_por']; ?></td>
			<td><?php echo $usuario['ultima_modificacion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usuarios', 'action' => 'view', $usuario['codigo_usuario'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usuarios', 'action' => 'edit', $usuario['codigo_usuario'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usuarios', 'action' => 'delete', $usuario['codigo_usuario']), array(), __('Are you sure you want to delete # %s?', $usuario['codigo_usuario'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Preferencias'); ?></h3>
	<?php if (!empty($persona['Preferencia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Codigo Preferencia'); ?></th>
		<th><?php echo __('Talla Preferencia'); ?></th>
		<th><?php echo __('Color Preferencia'); ?></th>
		<th><?php echo __('Codigo Tipo Articulo'); ?></th>
		<th><?php echo __('Codigo Comentario'); ?></th>
		<th><?php echo __('Codigo Persona'); ?></th>
		<th><?php echo __('Modificado Por'); ?></th>
		<th><?php echo __('Ultima Modificacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($persona['Preferencia'] as $preferencia): ?>
		<tr>
			<td><?php echo $preferencia['codigo_preferencia']; ?></td>
			<td><?php echo $preferencia['talla_preferencia']; ?></td>
			<td><?php echo $preferencia['color_preferencia']; ?></td>
			<td><?php echo $preferencia['codigo_tipo_articulo']; ?></td>
			<td><?php echo $preferencia['codigo_comentario']; ?></td>
			<td><?php echo $preferencia['codigo_persona']; ?></td>
			<td><?php echo $preferencia['modificado_por']; ?></td>
			<td><?php echo $preferencia['ultima_modificacion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'preferencias', 'action' => 'view', $preferencia['codigo_preferencia'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'preferencias', 'action' => 'edit', $preferencia['codigo_preferencia'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'preferencias', 'action' => 'delete', $preferencia['codigo_preferencia']), array(), __('Are you sure you want to delete # %s?', $preferencia['codigo_preferencia'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Preferencia'), array('controller' => 'preferencias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pedidos'); ?></h3>
	<?php if (!empty($persona['Pedido'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Codigo Pedido'); ?></th>
		<th><?php echo __('Fecha Pedido'); ?></th>
		<th><?php echo __('Fecha Entrega Pedido'); ?></th>
		<th><?php echo __('Lugar Entrega Pedido'); ?></th>
		<th><?php echo __('Cantidad Pedido'); ?></th>
		<th><?php echo __('Monto Pedido'); ?></th>
		<th><?php echo __('Codigo Persona'); ?></th>
		<th><?php echo __('Codigo Comentario'); ?></th>
		<th><?php echo __('Modificado Por'); ?></th>
		<th><?php echo __('Ultima Modificacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($persona['Pedido'] as $pedido): ?>
		<tr>
			<td><?php echo $pedido['codigo_pedido']; ?></td>
			<td><?php echo $pedido['fecha_pedido']; ?></td>
			<td><?php echo $pedido['fecha_entrega_pedido']; ?></td>
			<td><?php echo $pedido['lugar_entrega_pedido']; ?></td>
			<td><?php echo $pedido['cantidad_pedido']; ?></td>
			<td><?php echo $pedido['monto_pedido']; ?></td>
			<td><?php echo $pedido['codigo_persona']; ?></td>
			<td><?php echo $pedido['codigo_comentario']; ?></td>
			<td><?php echo $pedido['modificado_por']; ?></td>
			<td><?php echo $pedido['ultima_modificacion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pedidos', 'action' => 'view', $pedido['codigo_pedido'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pedidos', 'action' => 'edit', $pedido['codigo_pedido'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pedidos', 'action' => 'delete', $pedido['codigo_pedido']), array(), __('Are you sure you want to delete # %s?', $pedido['codigo_pedido'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
