<?php
echo anchor(base_url(), bold('Inicio')).' &gt; '.anchor(base_url().'noticias', bold('Noticias')).' &gt; '.$elementos_noticia['titulo_noticia'];
echo heading($elementos_noticia['titulo_noticia'], 2, 'class="titulo"');
echo $elementos_noticia['texto_noticia'];