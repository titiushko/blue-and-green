<?php
echo form_fieldset(heading('Crear Noticia', 2));
echo form_label('Titulo:', 'titulo_noticia');
echo br();
echo form_input(array('type' => 'text', 'name' => 'titulo_noticia', 'id' => 'titulo_noticia'));
echo br(2);
echo form_label('Texto:', 'texto_noticia');
echo br();
echo form_textarea(array('type' => 'text', 'name' => 'texto_noticia', 'id' => 'texto_noticia'));
echo br(2);
echo form_button(array('name' => 'agregar_noticia', 'id' => 'agregar_noticia', 'content' => 'Agregar'));
echo form_fieldset_close();
echo div('', 'id="mensaje"');