<!-- File: /app/View/Meseros/ver.ctp -->

<h2><?= $mesero['Mesero']['nombres'].' '.$mesero['Mesero']['apellidos']; ?></h2>
<p><strong>DUI:</strong> <?= $mesero['Mesero']['dui']; ?></p>
<p><strong>Teléfono:</strong> <?= $mesero['Mesero']['telefono']; ?></p>
<p><strong>Creado:</strong> <?= $this->Time->format('d/m/Y h:i A', $mesero['Mesero']['created']); ?></p>
<?php if (!empty($mesero['Mesero']['modified'])): ?>
	<p><strong>Modificado:</strong> <?= $this->Time->format('d/m/Y h:i A', $mesero['Mesero']['modified']); ?></p>
<?php endif ?>
<br>
<h3>Encargado de las Mesas:</h3>
<?php if (empty($mesero['Mesa'])): ?>
	<p>No tiene mesas asociadas.</p>
<?php endif ?>
<?php foreach ($mesero['Mesa'] as $mesa): ?>
	<p><strong>Serie:</strong> <?= $mesa['serie']; ?></p>
	<p><strong>Posición:</strong> <?= $mesa['posicion']; ?></p>
	<p><strong>Creado:</strong> <?= $this->Time->format('d/m/Y h:i A', $mesa['created']); ?></p>
	<br>
<?php endforeach ?>
<br>
<p><?= $this->Html->link('Listado de Meseros', array('controller' => 'meseros', 'action' => 'index')); ?></p>
