<!-- File: /app/View/Meseros/nuevo.ctp -->

<h2>Crear Mesero</h2>
<?php
echo $this->Form->create('Mesero');
echo $this->Form->input('dui');
echo $this->Form->input('nombres');
echo $this->Form->input('apellidos');
echo $this->Form->input('telefono');
echo $this->Form->end('Agregar Mesero');
?>
<br>
<p><?= $this->Html->link('Listado de Meseros', array('controller' => 'meseros', 'action' => 'index')); ?></p>
