DROP DATABASE IF EXISTS cp_restaurante;
CREATE DATABASE IF NOT EXISTS cp_restaurante DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE cp_restaurante;

DROP TABLE IF EXISTS meseros;
CREATE TABLE IF NOT EXISTS meseros(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	dui VARCHAR(9),
	nombres VARCHAR(100) COLLATE utf8_spanish_ci,
	apellidos VARCHAR(100) COLLATE utf8_spanish_ci,
	telefono VARCHAR(8),
	created DATETIME DEFAULT NULL,
	modified DATETIME DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

DROP TABLE IF EXISTS mesas;
CREATE TABLE IF NOT EXISTS mesas(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	mesero_id INT UNSIGNED NOT NULL,
	serie VARCHAR(10),
	puestos VARCHAR(20),
	posicion VARCHAR(100) COLLATE utf8_spanish_ci,
	created DATETIME DEFAULT NULL,
	modified DATETIME DEFAULT NULL,
	CONSTRAINT fk_mesas_meseros FOREIGN KEY(mesero_id) REFERENCES meseros(id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- ============================================================================================================================================================

INSERT INTO meseros(dui, nombres, apellidos, telefono, created) VALUES
('035494014', 'William', 'Gutierrez', '77924006', NOW()),
('084134880', 'Juan', 'Peréz', '79804894', NOW()),
('789040648', 'Pedro', 'Mendoza', '79804167', NOW()),
('294804174', 'María', 'Sanchez', '79801607', NOW()),
('846352468', 'Melinda', 'Funes', '20814180', NOW());

INSERT INTO mesas(mesero_id, serie, puestos, posicion, created) VALUES
(1, '001', '3', 'Lado superior izquierdo', NOW()),
(1, '002', '3', 'Lado superior derecho', NOW()),
(3, '003', '4', 'Lado inferior derecho', NOW()),
(5, '004', '2', 'Lado inferior central', NOW()),
(5, '005', '6', 'Centro', NOW());
