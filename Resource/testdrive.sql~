-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-06-2014 a las 22:51:39
-- Versión del servidor: 5.5.35-0ubuntu0.12.04.2
-- Versión de PHP: 5.3.10-1ubuntu3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `testdrive`
--
CREATE DATABASE IF NOT EXISTS `testdrive` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `testdrive`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CLIENTE`
--

DROP TABLE IF EXISTS `CLIENTE`;
CREATE TABLE IF NOT EXISTS `CLIENTE` (
  `idCliente` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `documento` int(8) NOT NULL,
  `telefono` int(9) NOT NULL,
  `celular` int(9) NOT NULL,
  `email` varchar(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `INMUEBLE`
--

DROP TABLE IF EXISTS `INMUEBLE`;
CREATE TABLE IF NOT EXISTS `INMUEBLE` (
  `idinmueble` int(4) NOT NULL AUTO_INCREMENT,
  `fechaPublicacion` date NOT NULL,
  `gastosComunes` decimal(6,0) NOT NULL,
  `superEdif` decimal(6,0) NOT NULL,
  `anioConst` int(4) NOT NULL,
  `dormitorios` int(2) NOT NULL,
  `banios` int(2) NOT NULL,
  `cocina` int(2) NOT NULL,
  `living` int(2) NOT NULL,
  `comedor` int(2) NOT NULL,
  `terraza` int(2) NOT NULL,
  `piso` int(2) NOT NULL,
  `equipado` tinyint(1) NOT NULL,
  `padron` int(8) NOT NULL,
  `mejoras` tinyint(1) NOT NULL,
  `nivelado` tinyint(1) NOT NULL,
  `agreste` tinyint(1) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `idubicacion` int(4) NOT NULL,
  PRIMARY KEY (`idinmueble`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `UBICACION`
--

DROP TABLE IF EXISTS `UBICACION`;
CREATE TABLE IF NOT EXISTS `UBICACION` (
  `idubicacion` int(4) NOT NULL AUTO_INCREMENT,
  `latitud` int(8) NOT NULL,
  `longitud` int(8) NOT NULL,
  `zona` varchar(40) NOT NULL,
  `barrio` varchar(40) NOT NULL,
  `ciudad` varchar(40) NOT NULL,
  `departamento` varchar(40) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  PRIMARY KEY (`idubicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USER`
--

DROP TABLE IF EXISTS `USER`;
CREATE TABLE IF NOT EXISTS `USER` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `USER`
--

INSERT INTO `USER` (`id`, `nombre`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'gonzalo', 'jota'),
(3, 'juan', 'juan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
