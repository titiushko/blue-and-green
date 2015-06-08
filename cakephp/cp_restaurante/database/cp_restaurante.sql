DROP DATABASE IF EXISTS cp_restaurante;
CREATE DATABASE IF NOT EXISTS cp_restaurante DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE cp_restaurante;

CREATE TABLE meseros(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	dui VARCHAR(9),
	nombres VARCHAR(100) CHARSET utf8 COLLATE utf8_spanish_ci,
	apellidos VARCHAR(100) CHARSET utf8 COLLATE utf8_spanish_ci,
	telefono VARCHAR(8),
	created DATETIME DEFAULT NULL,
	modified DATETIME DEFAULT NULL
) ENGINE=MyISAM;

INSERT INTO meseros(dui, nombres, apellidos, telefono, created) VALUES
('035494014', 'William', 'Gutierrez', '77924006', NOW()),
('084134880', 'Juan', 'Peréz', '79804894', NOW()),
('789040648', 'Pedro', 'Mendoza', '79804167', NOW()),
('294804174', 'María', 'Sanchez', '79801607', NOW()),
('846352468', 'Melinda', 'Funes', '20814180', NOW());
