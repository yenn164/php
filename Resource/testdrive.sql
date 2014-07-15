-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-07-2014 a las 21:19:14
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
-- Estructura de tabla para la tabla `AuthAssignment`
--

DROP TABLE IF EXISTS `AuthAssignment`;
CREATE TABLE IF NOT EXISTS `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AuthItem`
--

DROP TABLE IF EXISTS `AuthItem`;
CREATE TABLE IF NOT EXISTS `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AuthItemChild`
--

DROP TABLE IF EXISTS `AuthItemChild`;
CREATE TABLE IF NOT EXISTS `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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
  `foto` varchar(200) NOT NULL,
  `foto2` varchar(200) NOT NULL,
  `foto3` varchar(200) NOT NULL,
  `foto4` varchar(200) NOT NULL,
  `foto5` varchar(200) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `barrio` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `numero` int(5) NOT NULL,
  `apto` int(4) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `latitud` float DEFAULT NULL,
  `longitud` float DEFAULT NULL,
  `precio` float(7,2) NOT NULL,
  `destacado` tinyint(1) DEFAULT NULL,
  `moneda` int(1) NOT NULL,
  PRIMARY KEY (`idinmueble`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TRANSACCION`
--

DROP TABLE IF EXISTS `TRANSACCION`;
CREATE TABLE IF NOT EXISTS `TRANSACCION` (
  `idTrans` int(4) NOT NULL AUTO_INCREMENT,
  `tipoTrans` int(3) NOT NULL,
  `fechaTrans` date NOT NULL,
  `idClientePropietario` int(4) NOT NULL,
  `idInmueble` int(4) NOT NULL,
  `idClienteInteres` int(11) DEFAULT NULL,
  PRIMARY KEY (`idTrans`),
  UNIQUE KEY `IidCliente` (`idClientePropietario`),
  UNIQUE KEY `IidInmueble` (`idInmueble`),
  UNIQUE KEY `idClienteInteres` (`idClienteInteres`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `AuthAssignment`
--
ALTER TABLE `AuthAssignment`
  ADD CONSTRAINT `AuthAssignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `AuthItemChild`
--
ALTER TABLE `AuthItemChild`
  ADD CONSTRAINT `AuthItemChild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `AuthItemChild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `TRANSACCION`
--
ALTER TABLE `TRANSACCION`
  ADD CONSTRAINT `TRANSACCION_ibfk_1` FOREIGN KEY (`idClientePropietario`) REFERENCES `CLIENTE` (`idCliente`),
  ADD CONSTRAINT `TRANSACCION_ibfk_2` FOREIGN KEY (`idClienteInteres`) REFERENCES `CLIENTE` (`idCliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
