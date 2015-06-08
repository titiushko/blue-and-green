<!-- File: /app/View/Meseros/index.ctp -->

<h2>Listado Meseros</h2>
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
		<td><?= $mesero['Mesero']['created']; ?></td>
		<td>
			<?= $this->Html->link('Ver', array('controller' => 'meseros', 'action' => 'ver', $mesero['Mesero']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>