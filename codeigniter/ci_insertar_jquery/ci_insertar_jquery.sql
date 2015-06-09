DROP DATABASE IF EXISTS ci_insertar_jquery;
CREATE DATABASE IF NOT EXISTS ci_insertar_jquery DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE ci_insertar_jquery;

DROP TABLE IF EXISTS noticias;
CREATE TABLE noticias(
	codigo_noticia INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	titulo_noticia VARCHAR(128) NOT NULL,
	etiqueta_noticia VARCHAR(128) NOT NULL,
	texto_noticia TEXT NOT NULL,
	KEY etiqueta_noticia(etiqueta_noticia)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
