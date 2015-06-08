<!-- File: /app/View/Mesas/index.ctp -->

<h2>Listado de Mesas</h2>
<p><?= $this->Html->link('Agregar Mesa', array('controller' => 'mesas', 'action' => 'nuevo')); ?></p>
<table>
	<tr>
		<th>Serie</th>
		<th>Puestos</th>
		<th>Posición</th>
		<th>Creado</th>
		<th>Modificado</th>
		<th>Responsable</th>
		<th>Acción</th>
	</tr>
	<?php foreach ($mesas as $mesa): ?>
	<tr>
		<td><?= $mesa['Mesa']['serie']; ?></td>
		<td><?= $mesa['Mesa']['puestos']; ?></td>
		<td><?= $mesa['Mesa']['posicion']; ?></td>
		<td><?= $this->Time->format('d/m/Y h:i A', $mesa['Mesa']['created']); ?></td>
		<td><?= $this->Time->format('d/m/Y h:i A', $mesa['Mesa']['modified']); ?></td>
		<td><?= $this->Html->link($mesa['Mesero']['nombres'].' '.$mesa['Mesero']['apellidos'], array('controller' => 'meseros', 'action' => 'ver', $mesa['Mesero']['id'])) ?></td>
		<td>
			<?= $this->Html->link('Editar', array('controller' => 'mesas', 'action' => 'editar', $mesa['Mesa']['id'])); ?>
			<?= $this->Form->postLink('Eliminar', array('controller' => 'mesas', 'action' => 'eliminar', $mesa['Mesa']['id']), array('confirm' => '¿Eliminar mesa '.$mesa['Mesa']['serie'].'?')); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
