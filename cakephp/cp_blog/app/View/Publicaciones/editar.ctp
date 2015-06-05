<!-- File: /app/View/Publicaciones/editar.ctp -->

<h1>Editar Publicación</h1>
<?php
	echo $this->Form->create('Publicacion', array('action' => 'editar'));
	echo $this->Form->input('titulo_publicacion');
	echo $this->Form->input('cuerpo_publicacion', array('rows' => '3'));
	echo $this->Form->input('id_publicacion', array('type' => 'hidden'));
	echo $this->Form->end('Guardar Publicación');
