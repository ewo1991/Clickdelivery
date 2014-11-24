-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2014 a las 23:36:12
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `clickdelivery`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `idDelivery` char(8) DEFAULT NULL,
  `idUsuario` char(8) NOT NULL,
  `idRestaurante` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_delivery`
--

CREATE TABLE IF NOT EXISTS `detalle_delivery` (
  `idDelivery` char(8) NOT NULL,
  `idPlato` char(8) NOT NULL,
  `diraccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE IF NOT EXISTS `platos` (
  `idPlato` char(8) DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `idRestaurante` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurante`
--

CREATE TABLE IF NOT EXISTS `restaurante` (
  `idRestaurante` char(8) DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `tipoRestauran` varchar(50) NOT NULL,
  `idUsuario` char(8) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE IF NOT EXISTS `tipousuario` (
  `idTipoUsuario` char(8) DEFAULT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idTipoUsuario`, `descripcion`) VALUES
('1', 'cliente'),
('2', 'empresa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` char(8) DEFAULT NULL,
  `usuario` varchar(50) NOT NULL,
  `pas` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `nombre_empresa` varchar(100) NOT NULL,
  `idTipoUsuario` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `pas`, `nombre`, `apellido`, `email`, `direccion`, `telefono`, `nombre_empresa`, `idTipoUsuario`) VALUES
('1', 'milton', '123', 'milton', 'becerra', 'brayan_666_91@hotmail.com', 'jr.lima#234', '530659', 'pollito con papas', '2'),
('2', 'kebin', '1234', 'kebin', 'pezo', 'pbkm-91@hotmail.com', 'jr.tarapoto#542', '524356', 'el pollin', '2'),
('3', 'jhon', '12345', 'jhon', 'ruiz', 'nose_345@hotmail.com', 'jr.morales#853', '527845', '', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `delivery`
--
ALTER TABLE `delivery`
 ADD KEY `idDelivery` (`idDelivery`), ADD KEY `resta` (`idRestaurante`), ADD KEY `usuari` (`idUsuario`);

--
-- Indices de la tabla `detalle_delivery`
--
ALTER TABLE `detalle_delivery`
 ADD KEY `delive` (`idDelivery`), ADD KEY `plat` (`idPlato`);

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
 ADD KEY `idPlato` (`idPlato`), ADD KEY `restaur` (`idRestaurante`);

--
-- Indices de la tabla `restaurante`
--
ALTER TABLE `restaurante`
 ADD KEY `idRestaurante` (`idRestaurante`), ADD KEY `idusuar` (`idUsuario`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
 ADD KEY `idTipoUsuario` (`idTipoUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD KEY `idUsuario` (`idUsuario`), ADD KEY `tipous` (`idTipoUsuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `delivery`
--
ALTER TABLE `delivery`
ADD CONSTRAINT `resta` FOREIGN KEY (`idRestaurante`) REFERENCES `restaurante` (`idRestaurante`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `usuari` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_delivery`
--
ALTER TABLE `detalle_delivery`
ADD CONSTRAINT `delive` FOREIGN KEY (`idDelivery`) REFERENCES `delivery` (`idDelivery`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `plat` FOREIGN KEY (`idPlato`) REFERENCES `platos` (`idPlato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `platos`
--
ALTER TABLE `platos`
ADD CONSTRAINT `restaur` FOREIGN KEY (`idRestaurante`) REFERENCES `restaurante` (`idRestaurante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `restaurante`
--
ALTER TABLE `restaurante`
ADD CONSTRAINT `idusuar` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
ADD CONSTRAINT `tipous` FOREIGN KEY (`idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
