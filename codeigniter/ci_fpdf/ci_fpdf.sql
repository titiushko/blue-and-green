DROP DATABASE IF EXISTS ci_fpdf;
CREATE DATABASE IF NOT EXISTS ci_fpdf DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE ci_fpdf;

DROP TABLE IF EXISTS tblalumno;
CREATE TABLE IF NOT EXISTS tblalumno(
	idalumno INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	paterno VARCHAR(15) NOT NULL,
	materno VARCHAR(15) NOT NULL,
	nombre VARCHAR(15) NOT NULL,
	grado VARCHAR(10) NOT NULL,
	grupo VARCHAR(2) NOT NULL,
	fec_nac DATE NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- ============================================================================================================================================================

INSERT INTO tblalumno(idalumno, paterno, materno, nombre, grado, grupo, fec_nac) VALUES
(1, '', '', 'Tito', 'Primero', 'A', '2014-11-09'),
(2, 'Titiushko', '', 'Javier', 'Segundo', 'A', '2014-11-12'),
(3, 'Miguel', 'Blankiushka', 'Francisco', 'Segundo', 'B', '2014-11-03');
