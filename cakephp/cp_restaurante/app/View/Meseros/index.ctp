<!-- File: /app/View/Meseros/index.ctp -->

<h2>Listado de Meseros</h2>
<p><?= $this->Html->link('Agregar Mesero', array('controller' => 'meseros', 'action' => 'nuevo')); ?></p>
<table>
	<tr>
		<th>Identificador</th>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Creado</th>
		<th>Acción</th>
	</tr>
	<?php foreach ($meseros as $mesero): ?>
	<tr>
		<td><?= $mesero['Mesero']['id']; ?></td>
		<td><?= $mesero['Mesero']['nombres']; ?></td>
		<td><?= $mesero['Mesero']['apellidos']; ?></td>
		<td><?= $this->Time->format('d/m/Y h:i A', $mesero['Mesero']['created']); ?></td>
		<td>
			<?= $this->Html->link('Ver', array('controller' => 'meseros', 'action' => 'ver', $mesero['Mesero']['id'])); ?>
			<?= $this->Html->link('Editar', array('controller' => 'meseros', 'action' => 'editar', $mesero['Mesero']['id'])); ?>
			<?= $this->Form->postLink('Eliminar', array('controller' => 'meseros', 'action' => 'eliminar', $mesero['Mesero']['id']), array('confirm' => '¿Eliminar a '.$mesero['Mesero']['nombres'].' '.$mesero['Mesero']['apellidos'].'?')); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
