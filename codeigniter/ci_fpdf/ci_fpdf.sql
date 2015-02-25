-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2014 a las 20:16:53
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ci_fpdf`
--

DROP DATABASE IF EXISTS ci_fpdf;
-- -------------------------------------------------------------------------------------
CREATE DATABASE ci_fpdf DEFAULT CHARACTER SET latin1 COLLATE latin1_bin;
USE ci_fpdf;

--
-- Estructura de tabla para la tabla `tblalumno`
--

CREATE TABLE IF NOT EXISTS `tblalumno` (
  `idalumno` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `paterno` varchar(15) NOT NULL,
  `materno` varchar(15) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `grado` varchar(10) NOT NULL,
  `grupo` varchar(2) NOT NULL,
  `fec_nac` date NOT NULL,
  PRIMARY KEY (`idalumno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcado de datos para la tabla `tblalumno`
--

INSERT INTO `tblalumno` (`idalumno`, `paterno`, `materno`, `nombre`, `grado`, `grupo`, `fec_nac`) VALUES
(1, '', '', 'Tito', 'Primero', 'A', '2014-11-09'),
(2, 'Titiushko', '', 'Javier', 'Segundo', 'A', '2014-11-12'),
(3, 'Miguel', 'Blankiushka', 'Francisco', 'Segundo', 'B', '2014-11-03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
