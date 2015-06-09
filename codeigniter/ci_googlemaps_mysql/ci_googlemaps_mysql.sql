DROP DATABASE IF EXISTS ci_googlemaps_mysql;
CREATE DATABASE IF NOT EXISTS ci_googlemaps_mysql DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE ci_googlemaps_mysql;

DROP TABLE IF EXISTS mapa;
CREATE TABLE mapa(
	id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(60) NOT NULL,
	direccion VARCHAR(80) DEFAULT NULL,
	lat FLOAT(10, 6) NOT NULL,
	lng FLOAT(10, 6) NOT NULL,
	tipo VARCHAR(30) DEFAULT NULL,
	imagen VARCHAR(64) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- ============================================================================================================================================================

INSERT INTO mapa(id, nombre, direccion, lat, lng, tipo, imagen) VALUES 
(4, 'Acapulco', 'Gerrero,  Mexico', 16.972740, -99.843750, NULL, NULL),
(2, 'Ciudad de Mexico', NULL, 19.394068, -99.184570, NULL, NULL),
(3, 'Yucatan', 'Mexico', 20.344627, -88.681641, NULL, NULL),
(5, 'Chihuahua', 'Mexico', 28.613459, -106.171875, NULL, NULL),
(6, 'Oaxaca', 'Mexico', 17.014769, -96.635742, NULL, NULL);
