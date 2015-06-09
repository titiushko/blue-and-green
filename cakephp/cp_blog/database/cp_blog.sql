DROP DATABASE IF EXISTS cp_blog;
CREATE DATABASE IF NOT EXISTS cp_blog DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE cp_blog;

DROP TABLE IF EXISTS publicaciones;
CREATE TABLE publicaciones(
	id_publicacion INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	titulo_publicacion VARCHAR(50) NOT NULL COLLATE utf8_spanish_ci,
	cuerpo_publicacion TEXT DEFAULT NULL COLLATE utf8_spanish_ci,
	creado_publicacion DATETIME DEFAULT NULL,
	modificado_publicacion DATETIME DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- ============================================================================================================================================================

INSERT INTO publicaciones(titulo_publicacion, cuerpo_publicacion, creado_publicacion) VALUES
('The title', 'This is the publicación body.', NOW()),
('A title once again', 'And the publicación body follows.', NOW()),
('Title strikes back', 'This is really exciting! Not.', NOW());
