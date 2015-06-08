<!-- File: /app/View/Meseros/ver.ctp -->

<h2><?= $mesero['Mesero']['nombres'].' '.$mesero['Mesero']['apellidos']; ?></h2>
<p><small>Creado: <?= $this->Time->format('d/m/Y h:i A', $mesero['Mesero']['created']); ?></small></p>
<?php if (!empty($mesero['Mesa']['modified'])): ?>
	<p><small>Modificado: <?= $this->Time->format('d/m/Y h:i A', $mesero['Mesero']['modified']); ?></small></p>
<?php endif ?>
<p><strong>DUI:</strong> <?= $mesero['Mesero']['dui']; ?></p>
<p><strong>Teléfono:</strong> <?= $mesero['Mesero']['telefono']; ?></p>
<br>
<p><?= $this->Html->link('Listado Meseros', array('controller' => 'meseros', 'action' => 'index')); ?></p>
