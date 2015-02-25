DROP DATABASE IF EXISTS ci_googlemaps_sidebar;
CREATE DATABASE ci_googlemaps_sidebar DEFAULT CHARACTER SET latin1 COLLATE latin1_bin;
USE ci_googlemaps_sidebar;

CREATE TABLE IF NOT EXISTS `mapa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pos_x` double NOT NULL,
  `pos_y` double NOT NULL,
  `infowindow` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

INSERT INTO `mapa` (`id`, `pos_x`, `pos_y`, `infowindow`) VALUES
(1, -3.7305078506469727, 40.355308532714844, 'Primer marker con infowindow con la librería de googlemaps para codeigniter.'),
(2, -1.7305078506469727, 42.355308532714844, 'Segundo marker con infowindow con la librería de googlemaps para codeigniter.'),
(3, -1.7305078506469727, 38.355308532714844, 'Tercer marker con infowindow con la librería de googlemaps para codeigniter.'),
(4, -6.630507946014404, 42.2053108215332, 'Cuarto marker con infowindow con la librería de googlemaps para codeigniter.'),
(5, -3.970507860183716, 41.355308532714844, 'Quinto marker con infowindow con la librería de googlemaps para codeigniter.'),
(6, -6.850507736206055, 38.52531051635742, 'Sexto marker con infowindow con la librería de googlemaps para codeigniter.'),
(7, -2.8505077362060547, 36.86531066894531, 'Séptimo marker con infowindow con la librería de googlemaps para codeigniter.'),
(8, -0.9405078291893005, 40.405311584472656, 'Octavo marker con infowindow con la librería de googlemaps para codeigniter.'),
(9, -0.9405078291893005, 41.58530807495117, 'Noveno marker con infowindow con la librería de googlemaps para codeigniter.'),
(10, 1.9505077600479126, 41.76530838012695, 'Décimo marker con infowindow con la librería de googlemaps para codeigniter.');
