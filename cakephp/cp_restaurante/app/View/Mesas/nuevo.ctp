<!-- File: /app/View/Mesas/nuevo.ctp -->

<h2>Crear Mesa</h2>
<?php
echo $this->Form->create('Mesa');
echo $this->Form->input('serie');
echo $this->Form->input('puestos');
echo $this->Form->input('posicion', array('rows' => 3));
echo $this->Form->input('mesero_id');
echo $this->Form->end('Agregar Mesa');
?>
<br>
<p><?= $this->Html->link('Listado de Mesas', array('controller' => 'mesas', 'action' => 'index')); ?></p>
