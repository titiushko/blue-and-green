--
-- Base de datos: ci_insertar_jquery
--

DROP DATABASE IF EXISTS ci_insertar_jquery;
-- -------------------------------------------------------------------------------------
CREATE DATABASE ci_insertar_jquery DEFAULT CHARACTER SET latin1 COLLATE latin1_bin;
USE ci_insertar_jquery;

-- --------------------------------------------------------

--
-- Definition of table noticias
--

CREATE TABLE noticias (
   codigo_noticia	INT(11) NOT NULL AUTO_INCREMENT,
   titulo_noticia	VARCHAR(128) NOT NULL,
   etiqueta_noticia	VARCHAR(128) NOT NULL,
   texto_noticia	TEXT NOT NULL,
   PRIMARY KEY (codigo_noticia),
   KEY etiqueta_noticia (etiqueta_noticia)
);
