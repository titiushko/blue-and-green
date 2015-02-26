<?php
echo anchor(base_url().'noticias/agregar_noticia', img(array('src' => base_url().'resources/img/agregar.png', 'width' => '15', 'height' => '15', 'title' => 'Agregar Noticia')).' <u>Agregar Noticia</u>');
foreach ($noticias as $elementos_noticia):
	echo heading($elementos_noticia['titulo_noticia'], 2, 'class="titulo"');
    echo div(substr($elementos_noticia['texto_noticia'], 0, 199), 'id="main"');
    echo p(anchor(base_url().'noticias/ver_noticia/'.$elementos_noticia['etiqueta_noticia'], 'Ver Noticia'));
endforeach;