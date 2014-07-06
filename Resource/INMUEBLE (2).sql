-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-07-2014 a las 00:07:28
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
  `foto` varchar(200) NOT NULL,
  `foto2` varchar(200) NOT NULL,
  `foto3` varchar(200) NOT NULL,
  `foto4` varchar(200) NOT NULL,
  `foto5` varchar(200) NOT NULL,
  PRIMARY KEY (`idinmueble`),
  UNIQUE KEY `Iidubicacion` (`idubicacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `INMUEBLE`
--
ALTER TABLE `INMUEBLE`
  ADD CONSTRAINT `INMUEBLE_ibfk_1` FOREIGN KEY (`idubicacion`) REFERENCES `UBICACION` (`idubicacion`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
