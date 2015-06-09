DROP DATABASE IF EXISTS ci_consultas;
CREATE DATABASE IF NOT EXISTS ci_consultas DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE ci_consultas;

DROP TABLE IF EXISTS comentarios;
CREATE TABLE IF NOT EXISTS comentarios(
	id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	id_user INT(11) UNSIGNED NOT NULL,
	id_entrada INT(11) UNSIGNED NOT NULL,
	titulo_comentario VARCHAR(200) NOT NULL COLLATE utf8_spanish_ci,
	comentario TEXT NOT NULL COLLATE utf8_spanish_ci,
	comment_date DATETIME DEFAULT NULL,
	CONSTRAINT fk_comentarios_users FOREIGN KEY(id_user) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT fk_comentarios_entradas FOREIGN KEY(id_entrada) REFERENCES entradas(id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

DROP TABLE IF EXISTS entradas;
CREATE TABLE IF NOT EXISTS entradas(
	id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	id_user INT(11) NOT NULL,
	titulo VARCHAR(200) NOT NULL COLLATE utf8_spanish_ci,
	entrada TEXT NOT NULL COLLATE utf8_spanish_ci,
	publish_date DATETIME DEFAULT NULL,
	CONSTRAINT fk_entradas_users FOREIGN KEY(id_user) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS users (
	id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(100) NOT NULL COLLATE utf8_spanish_ci,
	fname VARCHAR(100) NOT NULL COLLATE utf8_spanish_ci,
	lname VARCHAR(150) NOT NULL COLLATE utf8_spanish_ci,
	register_date DATETIME DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- ============================================================================================================================================================

INSERT INTO comentarios(id, id_user, id_entrada, titulo_comentario, comentario, comment_date) VALUES
(1, 1, 2, 'Comentario del usuario id 1 a la entrada id 2', 'Esta es un nuevo comentario del usuario id 1 a la entrada id 2', '2013-01-19 00:00:00'),
(2, 2, 1, 'Comentario del usuario id 1 a la entrada id 1', 'Esta es un nuevo comentario del usuario id 1 a la entrada id 1', '2013-01-19 00:00:00'),
(3, 1, 4, 'Comentario del usuario id 1 a la entrada id 4', 'Un nuevo comentario de israel965 a la entrada con id 4', '2013-01-19 00:00:00'),
(4, 1, 1, 'Comentario del usuario id 1 a la entrada id 1', 'Comentario del usuario id 1 a la entrada id 1', '2013-01-19 00:00:00');

INSERT INTO entradas (id, id_user, titulo, entrada, publish_date) VALUES
(1, 1, 'Entrada del usuario id 1', 'Primera entrada del usuario con id 1', '2013-01-19 00:00:00'),
(2, 2, 'Entrada del usuario id 2', 'Esta es una nueva entrada del usuario con id 2', '2013-01-19 00:00:00'),
(3, 3, 'Entrada del usuario id 3', 'Otra una nueva entrada del usuario con id 3', '2013-01-19 00:00:00'),
(4, 4, 'Entrada del usuario id 4', 'última entrada del usuario con id 4', '2013-01-19 00:00:00'),
(5, 1, 'Otra entrada del usuario 1', 'Una nueva entrada del usuario con id para pruebas', '2013-01-16 00:00:00');

INSERT INTO users (id, username, fname, lname, register_date) VALUES
(1, 'israel965', 'manuel', 'castellon jimenez', '2013-01-15 00:00:00'),
(2, 'vanessa78', 'vanessa', 'martin saez', '2013-01-22 00:00:00'),
(3, 'juan80', 'juan', 'santos perez', '2013-01-17 00:00:00'),
(4, 'andres70', 'andres', 'lópez castro', '2013-01-19 00:00:00');
