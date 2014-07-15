-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-07-2014 a las 21:27:27
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
  `moneda` int(1) NOT NULL,
  `precio` float(7,2) NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  PRIMARY KEY (`idinmueble`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `INMUEBLE`
--

INSERT INTO `INMUEBLE` (`idinmueble`, `fechaPublicacion`, `gastosComunes`, `superEdif`, `anioConst`, `dormitorios`, `banios`, `cocina`, `living`, `comedor`, `terraza`, `piso`, `equipado`, `padron`, `mejoras`, `nivelado`, `agreste`, `tipo`, `foto`, `foto2`, `foto3`, `foto4`, `foto5`, `departamento`, `ciudad`, `barrio`, `calle`, `numero`, `apto`, `descripcion`, `latitud`, `longitud`, `moneda`, `precio`, `destacado`) VALUES
(3, '2014-07-13', 470, 100, 1960, 3, 2, 1, 1, 1, 0, NULL, 0, 1001, 1, 0, NULL, '1', '3035-5-1.jpg', '3947-5-2.jpg', '9826-5-3.jpg', '4788-5-4.jpg', '9454-5-5.jpg', 'Montevideo', 'Montevideo', 'Centro', 'Colonia', 1243, 0, 'Hermosa casa en el centro!', -34.9093, -56.1701, 1, 14000.00, 0),
(4, '2014-07-01', 0, 300, 2000, 5, 4, 1, 1, 1, 0, NULL, 0, 38479, 1, 0, NULL, '1', '8166-2-1.jpg', '3337-2-2.jpg', '6242-2-3.jpg', '7027-2-4.jpg', '9204-2-5.jpg', 'Montevideo', 'Montevideo', 'Malvin', 'Avenida Principal', 0, 0, 'Hermosa finca, terminaciones de lujo!', -34.9084, -56.147, 0, 19000.00, 0),
(5, '2014-07-08', 0, 80, 1988, 3, 2, 1, 0, 1, 0, NULL, 0, 70989, 0, 0, NULL, '1', '9256-1-1.jpg', '493-1-2.jpg', '1053-1-3.jpg', '3356-1-4.jpg', '6639-1-5.jpg', 'Montevideo', 'Montevideo', 'Malvín', 'Gral Flores', 1212, 0, 'Casa en Mlavín con 3 Dormitorios!', -34.9034, -56.1379, 0, 99999.99, 0),
(6, '2014-07-09', 2000, 200, 1999, 4, 2, 1, 1, 1, 0, NULL, 0, 8979798, 1, 0, NULL, '1', '3294-3-1.jpg', '8724-3-2.jpg', '1199-3-3.jpg', '1178-3-4.jpg', '4407-3-5.jpg', 'Montevideo', 'Montevideo', 'Buceo', 'Rivera', 0, 0, 'Casa en Barrio muy Tranquilo!', -34.8978, -56.1304, 0, 12000.00, 0),
(7, '0000-00-00', 0, 80, 1988, 2, 2, 1, 1, 1, 0, NULL, 0, 654765, 1, 0, NULL, '1', '8301-4-1.jpg', '752-4-2.jpg', '2065-4-3.jpg', '113-4-4.jpg', '7663-4-5.jpg', 'Montevideo', 'Montevideo', 'Aguada', 'Lima', 0, 0, 'Casa cerca del Centro con amplio patio!', -34.8919, -56.1779, 0, 0.00, 0),
(8, '0000-00-00', 900, 50, 1950, 2, 1, 1, 1, 0, 0, NULL, 0, 325443, 1, 0, NULL, '1', '2014-6-1.jpg', '858-6-2.jpg', '5861-6-3.jpg', '1554-6-4.jpg', '1269-6-5.jpg', 'Montevideo', 'Montevideo', 'Ituzaingo', 'Marquez', 0, 0, 'Casa muy cómoda, pronta para habitar!', -34.8676, -56.1901, 0, 0.00, 0),
(9, '0000-00-00', 2344, 100, 2004, 4, 2, 1, 1, 0, 0, NULL, 0, 54764375, 1, 0, NULL, '1', '3551-7-1.jpg', '332-7-2.jpg', '6241-7-3.jpg', '3579-7-4.jpg', '3340-7-5.jpg', 'Montevideo', 'Montevideo', 'Unión', 'Vasquez', 0, 0, 'Casa en Unión', -34.8811, -56.1377, 0, 0.00, 0),
(10, '2014-07-07', 3000, 70, 1900, 3, 2, 1, 1, 0, 1, 4, 0, 348590, 0, 0, NULL, '2', '6583-a-1.jpg', '7633-a-2.jpg', '2544-a-3.jpg', '9294-a-4.jpg', '2042-a-4.jpg', 'Montevideo', 'Montevideo', 'Pocitos', 'Av. brasil', 5654, 109, 'Hermoso apartamento en pocitos!', -34.911, -56.1539, 0, 17500.00, 0),
(11, '2014-07-13', 3000, 90, 2005, 4, 3, 1, 1, 1, 1, 6, 1, 6345634, 1, 0, NULL, '2', '1980-b-5.jpg', '3713-b-1.jpg', '9505-b-2.jpg', '4082-b-3.jpg', '7466-b-4.jpg', 'Montevideo', 'Montevideo', 'Pocitos', 'Hoquart', 0, 0, 'Apartamento equipado, muy moderno!', -34.8964, -56.1449, 0, 14000.00, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TRANSACCION`
--

DROP TABLE IF EXISTS `TRANSACCION`;
CREATE TABLE IF NOT EXISTS `TRANSACCION` (
  `idTrans` int(4) NOT NULL AUTO_INCREMENT,
  `tipoTrans` int(3) NOT NULL,
  `fechaTrans` date NOT NULL,
  `idCliente` int(4) NOT NULL,
  `idInmueble` int(4) NOT NULL,
  PRIMARY KEY (`idTrans`),
  UNIQUE KEY `IidCliente` (`idCliente`),
  UNIQUE KEY `IidInmueble` (`idInmueble`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `USER`
--

INSERT INTO `USER` (`id`, `nombre`, `password`) VALUES
(4, 'admin', 'admin'),
(5, 'admin', 'admin'),
(7, 'fer', 'fer');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `TRANSACCION`
--
ALTER TABLE `TRANSACCION`
  ADD CONSTRAINT `TRANSACCION_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `CLIENTE` (`idCliente`),
  ADD CONSTRAINT `TRANSACCION_ibfk_2` FOREIGN KEY (`idInmueble`) REFERENCES `INMUEBLE` (`idinmueble`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
