--
-- Base de datos: `ci_permisos_usuarios`
--

DROP DATABASE IF EXISTS ci_permisos_usuarios;
-- -------------------------------------------------------------------------------------
CREATE DATABASE ci_permisos_usuarios DEFAULT CHARACTER SET latin1 COLLATE latin1_bin;
USE ci_permisos_usuarios;

-- --------------------------------------------------------

--
-- Definition of table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `perfil`, `username`, `password`) VALUES
(1, 'administrador', 'israel965', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(2, 'editor', 'vanessa78', 'ab41949825606da179db7c89ddcedcc167b64847'),
(3, 'suscriptor', 'jaime70', '1a248d7a471ad8d5993aa523c8397ce1d0bafe78');
