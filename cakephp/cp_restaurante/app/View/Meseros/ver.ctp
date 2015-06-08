<!-- File: /app/View/Meseros/ver.ctp -->

<h2><?= $mesero['Mesero']['nombres'].' '.$mesero['Mesero']['apellidos']; ?></h2>
<p><small>Creado: <?= $this->Time->format('d/m/Y h:i A', $mesero['Mesero']['created']); ?></small></p>
<?php if (!empty($mesero['Mesa']['modified'])): ?>
	<p><small>Modificado: <?= $this->Time->format('d/m/Y h:i A', $mesero['Mesero']['modified']); ?></small></p>
<?php endif ?>
<p><strong>DUI:</strong> <?= $mesero['Mesero']['dui']; ?></p>
<p><strong>Teléfono:</strong> <?= $mesero['Mesero']['telefono']; ?></p>
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
<p><?= $this->Html->link('Listado Meseros', array('controller' => 'meseros', 'action' => 'index')); ?></p>
