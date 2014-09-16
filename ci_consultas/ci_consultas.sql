-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-01-2013 a las 14:50:05
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `consultas_codeigniter`
--

DROP DATABASE IF EXISTS consultas_codeigniter;
-- -------------------------------------------------------------------------------------
CREATE DATABASE consultas_codeigniter DEFAULT CHARACTER SET latin1 COLLATE latin1_bin;
USE consultas_codeigniter;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_entrada` int(11) NOT NULL,
  `titulo_comentario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `comentario` text COLLATE utf8_spanish_ci NOT NULL,
  `comment_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_user`, `id_entrada`, `titulo_comentario`, `comentario`, `comment_date`) VALUES
(1, 1, 2, 'Comentario del usuario id 1 a la entrada id 2', 'Esta es un nuevo comentario del usuario id 1 a la entrada id 2', '2013-01-19 00:00:00'),
(2, 2, 1, 'Comentario del usuario id 1 a la entrada id 1', 'Esta es un nuevo comentario del usuario id 1 a la entrada id 1', '2013-01-19 00:00:00'),
(3, 1, 4, 'Comentario del usuario id 1 a la entrada id 4', 'Un nuevo comentario de israel965 a la entrada con id 4', '2013-01-19 00:00:00'),
(4, 1, 1, 'Comentario del usuario id 1 a la entrada id 1', 'Comentario del usuario id 1 a la entrada id 1', '2013-01-19 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE IF NOT EXISTS `entradas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `entrada` text COLLATE utf8_spanish_ci NOT NULL,
  `publish_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id`, `id_user`, `titulo`, `entrada`, `publish_date`) VALUES
(1, 1, 'Entrada del usuario id 1', 'Primera entrada del usuario con id 1', '2013-01-19 00:00:00'),
(2, 2, 'Entrada del usuario id 2', 'Esta es una nueva entrada del usuario con id 2', '2013-01-19 00:00:00'),
(3, 3, 'Entrada del usuario id 3', 'Otra una nueva entrada del usuario con id 3', '2013-01-19 00:00:00'),
(4, 4, 'Entrada del usuario id 4', 'última entrada del usuario con id 4', '2013-01-19 00:00:00'),
(5, 1, 'Otra entrada del usuario 1', 'Una nueva entrada del usuario con id para pruebas', '2013-01-16 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fname` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `lname` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `register_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `fname`, `lname`, `register_date`) VALUES
(1, 'israel965', 'manuel', 'castellon jimenez', '2013-01-15 00:00:00'),
(2, 'vanessa78', 'vanessa', 'martin saez', '2013-01-22 00:00:00'),
(3, 'juan80', 'juan', 'santos perez', '2013-01-17 00:00:00'),
(4, 'andres70', 'andres', 'lópez castro', '2013-01-19 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
