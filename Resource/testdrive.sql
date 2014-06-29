-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-06-2014 a las 18:03:42
-- Versión del servidor: 5.5.35-0ubuntu0.12.04.2
-- Versión de PHP: 5.3.10-1ubuntu3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `INMOBILIARIA`
--
CREATE DATABASE IF NOT EXISTS `INMOBILIARIA` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `INMOBILIARIA`;

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

--
-- Truncar tablas antes de insertar `CLIENTE`
--

TRUNCATE TABLE `CLIENTE`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `INMUEBLE`
--

DROP TABLE IF EXISTS `INMUEBLE`;
CREATE TABLE IF NOT EXISTS `INMUEBLE` (
  `idinmueble` int(4) NOT NULL AUTO_INCREMENT,
  `fechaPublicacion` date DEFAULT NULL,
  `gastosComunes` decimal(6,0) DEFAULT NULL,
  `superEdif` decimal(6,0) DEFAULT NULL,
  `anioConst` int(4) DEFAULT NULL,
  `dormitorios` int(2) DEFAULT NULL,
  `banios` int(2) DEFAULT NULL,
  `cocina` int(2) DEFAULT NULL,
  `living` int(2) DEFAULT NULL,
  `comedor` int(2) DEFAULT NULL,
  `terraza` int(2) DEFAULT NULL,
  `piso` int(2) DEFAULT NULL,
  `equipado` tinyint(1) DEFAULT NULL,
  `padron` int(8) DEFAULT NULL,
  `mejoras` tinyint(1) DEFAULT NULL,
  `nivelado` tinyint(1) DEFAULT NULL,
  `agreste` tinyint(1) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `idubicacion` int(4) NOT NULL,
  PRIMARY KEY (`idinmueble`),
  UNIQUE KEY `Iidubicacion` (`idubicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Truncar tablas antes de insertar `INMUEBLE`
--

TRUNCATE TABLE `INMUEBLE`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TRANSACION`
--

DROP TABLE IF EXISTS `TRANSACION`;
CREATE TABLE IF NOT EXISTS `TRANSACION` (
  `idTrans` int(4) NOT NULL AUTO_INCREMENT,
  `tipoTrans` int(3) NOT NULL,
  `fechaTrans` date NOT NULL,
  `idCliente` int(4) NOT NULL,
  `idInmueble` int(4) NOT NULL,
  PRIMARY KEY (`idTrans`),
  UNIQUE KEY `IidCliente` (`idCliente`),
  UNIQUE KEY `IidInmueble` (`idInmueble`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Truncar tablas antes de insertar `TRANSACION`
--

TRUNCATE TABLE `TRANSACION`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `UBICACION`
--

DROP TABLE IF EXISTS `UBICACION`;
CREATE TABLE IF NOT EXISTS `UBICACION` (
  `idubicacion` int(4) NOT NULL AUTO_INCREMENT,
  `latitud` int(8) DEFAULT NULL,
  `longitud` int(8) DEFAULT NULL,
  `zona` varchar(40) DEFAULT NULL,
  `barrio` varchar(40) DEFAULT NULL,
  `ciudad` varchar(40) DEFAULT NULL,
  `departamento` varchar(40) DEFAULT NULL,
  `descripcion` varchar(40) DEFAULT NULL,
  `calle` varchar(30) DEFAULT NULL,
  `numero` int(5) DEFAULT NULL,
  `apto` int(4) DEFAULT NULL,
  PRIMARY KEY (`idubicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Truncar tablas antes de insertar `UBICACION`
--

TRUNCATE TABLE `UBICACION`;
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
-- Truncar tablas antes de insertar `USER`
--

TRUNCATE TABLE `USER`;
--
-- Volcado de datos para la tabla `USER`
--

INSERT INTO `USER` (`id`, `nombre`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'gonzalo', 'jota'),
(3, 'juan', 'juan');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `INMUEBLE`
--
ALTER TABLE `INMUEBLE`
  ADD CONSTRAINT `INMUEBLE_ibfk_1` FOREIGN KEY (`idubicacion`) REFERENCES `UBICACION` (`idubicacion`);

--
-- Filtros para la tabla `TRANSACION`
--
ALTER TABLE `TRANSACION`
  ADD CONSTRAINT `TRANSACION_ibfk_2` FOREIGN KEY (`idInmueble`) REFERENCES `INMUEBLE` (`idinmueble`),
  ADD CONSTRAINT `TRANSACION_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `CLIENTE` (`idCliente`);
  
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
