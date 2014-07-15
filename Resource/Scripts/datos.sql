-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-07-2014 a las 19:32:25
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

--
-- Truncar tablas antes de insertar `AuthAssignment`
--

TRUNCATE TABLE `AuthAssignment`;
--
-- Volcado de datos para la tabla `AuthAssignment`
--

INSERT INTO `AuthAssignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Administrador', '7', NULL, 'N;'),
('Agente', '6', NULL, 'N;'),
('Director', '1', NULL, NULL);

--
-- Truncar tablas antes de insertar `AuthItem`
--

TRUNCATE TABLE `AuthItem`;
--
-- Volcado de datos para la tabla `AuthItem`
--

INSERT INTO `AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Administrador', 1, 'Administrador', ' ', NULL),
('Agente', 1, 'Agente', ' ', NULL),
('Director', 1, 'Director', ' ', NULL);

--
-- Truncar tablas antes de insertar `AuthItemChild`
--

TRUNCATE TABLE `AuthItemChild`;
--
-- Truncar tablas antes de insertar `CLIENTE`
--

TRUNCATE TABLE `CLIENTE`;
--
-- Volcado de datos para la tabla `CLIENTE`
--

INSERT INTO `CLIENTE` (`idCliente`, `nombre`, `documento`, `telefono`, `celular`, `email`, `direccion`) VALUES
(14, 'Yeni H.', 4566777, 2345456, 9876767, 'yeni@gmail.com', 'Avenida SIempre VIva'),
(15, 'Jota R.', 4576886, 2030033, 984567889, 'jota@gmail.com', 'tacuarembo y algo'),
(16, 'Fernando F,', 34566789, 2345444, 98675757, 'fernando@gmail.com', 'Cerca del cementerio');

--
-- Truncar tablas antes de insertar `INMUEBLE`
--

TRUNCATE TABLE `INMUEBLE`;
--
-- Volcado de datos para la tabla `INMUEBLE`
--

INSERT INTO `INMUEBLE` (`idinmueble`, `fechaPublicacion`, `gastosComunes`, `superEdif`, `anioConst`, `dormitorios`, `banios`, `cocina`, `living`, `comedor`, `terraza`, `piso`, `equipado`, `padron`, `mejoras`, `nivelado`, `agreste`, `tipo`, `foto`, `foto2`, `foto3`, `foto4`, `foto5`, `departamento`, `ciudad`, `barrio`, `calle`, `numero`, `apto`, `descripcion`, `latitud`, `longitud`, `precio`, `destacado`, `moneda`) VALUES
(17, '2014-07-15', 1234, 60, 1900, 2, 1, 1, 1, 1, 0, NULL, 0, 1234, 1, 0, NULL, '2', '5082-034AP1995_20140715112042.JPG', '1465-034AP1995_20140715112600.JPG', '5374-034AP1995_20140715112636.JPG', '8375-034AP1995_20140715113203.JPG', '3403-034AP1995_20140715113220.JPG', '', 'MONTEVIDEO', 'CORDON', 'MAGALLANES', 304, 3, 'Apartamento grande y luminoso', '-34.90788898247918', '-56.165950298309326', 5600.00, 0, 0),
(18, '2014-07-15', 3000, 50, 1990, 2, 2, 1, 1, 1, 0, NULL, 0, 12344, 1, 0, NULL, '2', '8355-028APALQ329_20140613122529.JPG', '7742-028APALQ329_20140613122531.JPG', '7747-028APALQ329_20140613122534.JPG', '2066-028APALQ329_20140613122536.JPG', '7564-028APALQ329_20140613122538.JPG', 'Montevideo', 'Montevidoe', 'Blanqueada', 'Echeverria', 505, 5, 'Apto en zona de la blanqueada', '-34.90788898247918', '-56.165950298309326', 2100.00, 1, 0),
(20, '2014-07-15', 3400, 60, 1900, 4, 3, 0, 1, 0, 0, NULL, 0, 1234, 1, 0, NULL, '1', '6866-0G7CA246_20140515164243.JPG', '6473-0G7CA246_20140515164245.JPG', '9317-0G7CA246_20140515164248.JPG', '1429-0G7CA246_20140515164253.JPG', '8450-0G7CA246_20140515164257.JPG', 'Montevideo', 'MONTEVIDEO', 'CERRO', 'LA DEL CERRO', 201, 2, 'Casa amplia en el centro.', '-34.9119185644139', '-56.16028547286987', 3400.00, 1, 0),
(21, '2014-07-15', 2333, 80, 1970, 3, 2, 1, 1, 0, 0, NULL, 0, 4567, 1, 0, NULL, '1', '3046-0P6CA767_20140326163158.JPG', '1049-0P6CA767_20140326163200.JPG', '8457-0P6CA767_20140326163158.JPG', '7288-0P6CA767_20140326163200.JPG', '3488-0P6CA767_20140326163200.JPG', 'Montevideo', 'MONTEVIDEO', 'La comercial', 'republica', 0, 0, 'casa comoda y con patio', '-34.915068187247215', '-56.16612195968628', 1500.00, 0, 0),
(22, '2014-07-15', 2345, 45, 1998, NULL, 1, 1, 0, 1, 0, NULL, 0, 4567, 0, 0, NULL, '4', '6408-287LO7_20140224105146.JPG', '3961-287LO7_20140224105147.JPG', '5413-287LO7_20140224105149.JPG', '944-287LO7_20140224105150.JPG', '4998-287LO7_20140224105147.JPG', 'Montevideo', 'MONTEVIDEO', 'ciduad vieja', 'rincon', 0, 0, 'Oficina en rincon', '-34.90120190359873', '-56.190733909606934', 4500.00, 1, 0),
(23, '2014-07-15', 3456, 234, 1956, NULL, 2, 1, 0, 1, 0, NULL, 0, 3456, 1, 0, NULL, '4', '8579-259LO004_20120926173933.JPG', '2066-259LO004_20120926173950.JPG', '9086-259LO004_20120926174008.JPG', '2656-259LO004_20120926174031.JPG', '3854-259LO004_20120926174048.JPG', 'Montevideo', 'MONTEVIDEO', 'peñarol', 'una calle', 0, 0, 'Oficina en el barrio peñarol', '-34.908628047251085', '-56.15944862365723', 56778.00, 0, 0),
(24, '2014-07-15', 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, NULL, 0, 2344, 0, 0, 1, '3', '6925-0G7TE238_20140313213729.JPG', '2294-0G7TE238_20140313213732.JPG', '7346-0G7TE238_20140313213734.JPG', '5129-0G7TE238_20140313213737.JPG', '6140-0G7TE238_20140313213739.JPG', 'Montevideo', 'MONTEVIDEO', 'La union', 'Luis Suarez', 0, 0, 'TERRENO LISTO PARA CONSTRUIR', '-34.9131854663385', '-56.163976192474365', 34566.00, 1, 0);

--
-- Truncar tablas antes de insertar `TRANSACCION`
--

TRUNCATE TABLE `TRANSACCION`;
--
-- Volcado de datos para la tabla `TRANSACCION`
--

INSERT INTO `TRANSACCION` (`idTrans`, `tipoTrans`, `fechaTrans`, `idClientePropietario`, `idInmueble`, `idClienteInteres`) VALUES
(13, 2, '2014-07-15', 14, 17, 16),
(14, 1, '2014-07-15', 15, 20, NULL),
(15, 2, '2014-07-15', 16, 23, NULL);

--
-- Truncar tablas antes de insertar `USER`
--

TRUNCATE TABLE `USER`;
--
-- Volcado de datos para la tabla `USER`
--

INSERT INTO `USER` (`id`, `nombre`, `password`) VALUES
(1, 'admin', 'admin'),
(6, 'Gonzalo', 'gonzalo'),
(7, 'Sandino', 'sandino');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
