<!-- File: /app/View/Publicaciones/agregar.ctp -->

<h1>Agregar Publicación</h1>
<?php
echo $this->Form->create('Publicacion');
echo $this->Form->input('titulo_publicacion');
echo $this->Form->input('cuerpo_publicacion', array('rows' => '3'));
echo $this->Form->end('Agregar Publicación');
?>
