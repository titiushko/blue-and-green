<!-- File: /app/View/Meseros/editar.ctp -->

<h2>Editar Mesero</h2>
<?php
echo $this->Form->create('Mesero');
echo $this->Form->input('dui');
echo $this->Form->input('nombres');
echo $this->Form->input('apellidos');
echo $this->Form->input('telefono');
echo $this->Form->end('Guardar Mesero');
?>
<br>
<p><?= $this->Html->link('Listado de Meseros', array('controller' => 'meseros', 'action' => 'index')); ?></p>
