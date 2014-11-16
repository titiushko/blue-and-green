-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2014 a las 14:30:29
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `ci_formulario_ajax`
--

DROP DATABASE IF EXISTS ci_formulario_ajax;
-- -------------------------------------------------------------------------------------
CREATE DATABASE ci_formulario_ajax DEFAULT CHARACTER SET latin1 COLLATE latin1_bin;
USE ci_formulario_ajax;

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE latin1_bin DEFAULT NULL,
  `email` varchar(100) COLLATE latin1_bin DEFAULT NULL,
  `asunto` varchar(200) COLLATE latin1_bin DEFAULT NULL,
  `mensaje` text COLLATE latin1_bin,
  `hora` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=1 ;
