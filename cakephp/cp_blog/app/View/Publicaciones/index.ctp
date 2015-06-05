<!-- File: /app/View/Publicaciones/index.ctp -->

<h1>Publicaciones Publicadas</h1>
<p><?= $this->Html->link("Agregar Publicación", array('action' => 'agregar')); ?></p>
<table>
	<tr>
		<th>Identificador</th>
		<th>Título</th>
		<th>Acción</th>
		<th>Creado</th>
	</tr>
	<!-- Here is where we loop through our $publicacions array, printing out publicación info -->
	<?php foreach ($publicaciones as $publicacion): ?>
	<tr>
		<td><?= $publicacion['Publicacion']['id_publicacion']; ?></td>
		<td><?= $this->Html->link($publicacion['Publicacion']['titulo_publicacion'], array('controller' => 'publicaciones', 'action' => 'ver', $publicacion['Publicacion']['id_publicacion'])); ?></td>
		<td><?= $publicacion['Publicacion']['creado_publicacion']; ?></td>
		<td>
			<?php echo $this->Html->link('Editar', array('action' => 'editar', $publicacion['Publicacion']['id_publicacion']));?>
			<?php echo $this->Form->postLink('Eliminar', array('action' => 'eliminar', $publicacion['Publicacion']['id_publicacion']), array('confirm' => '¿Estás seguro?'))?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
