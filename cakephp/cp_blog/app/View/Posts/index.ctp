<!-- File: /app/View/Posts/index.ctp -->

<h1>Posts Publicados</h1>
<p><?= $this->Html->link("Agregar Post", array('action' => 'add')); ?></p>
<table>
	<tr>
		<th>Identificador</th>
		<th>Título</th>
		<th>Acción</th>
		<th>Creado</th>
	</tr>
	<!-- Here is where we loop through our $posts array, printing out post info -->
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?= $post['Post']['id']; ?></td>
		<td><?= $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></td>
		<td><?= $post['Post']['created']; ?></td>
		<td>
			<?php echo $this->Html->link('Editar', array('action' => 'edit', $post['Post']['id']));?>
			<?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $post['Post']['id']), array('confirm' => '¿Estás seguro?'))?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
