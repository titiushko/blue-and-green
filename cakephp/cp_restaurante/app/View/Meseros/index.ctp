<!-- File: /app/View/Meseros/index.ctp -->

<h2>Listado Meseros</h2>
<table>
	<tr>
		<th>Identificador</th>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Creado</th>
	</tr>
	<?php foreach ($meseros as $mesero): ?>
	<tr>
		<td><?= $mesero['Mesero']['id']; ?></td>
		<td><?= $mesero['Mesero']['nombres']; ?></td>
		<td><?= $mesero['Mesero']['apellidos']; ?></td>
		<td><?= $mesero['Mesero']['created']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
