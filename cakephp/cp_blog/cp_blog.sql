DROP DATABASE IF EXISTS cp_blog;
CREATE DATABASE IF NOT EXISTS cp_blog DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE cp_blog;

/* tabla para nuestros articulos */
CREATE TABLE publicaciones(
	id_publicacion INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	titulo_publicacion VARCHAR(50),
	cuerpo_publicacion TEXT,
	creado_publicacion DATETIME DEFAULT NULL,
	modificado_publicacion DATETIME DEFAULT NULL
);

/* algunos valores de test */
INSERT INTO publicaciones(titulo_publicacion,cuerpo_publicacion,creado_publicacion) VALUES('The title', 'This is the publicación body.', NOW());
INSERT INTO publicaciones(titulo_publicacion,cuerpo_publicacion,creado_publicacion) VALUES('A title once again', 'And the publicación body follows.', NOW());
INSERT INTO publicaciones(titulo_publicacion,cuerpo_publicacion,creado_publicacion) VALUES('Title strikes back', 'This is really exciting! Not.', NOW());
