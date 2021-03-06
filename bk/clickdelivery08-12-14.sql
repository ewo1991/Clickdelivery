/*
Navicat MySQL Data Transfer

Source Server         : milton
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : clickdelivery

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2014-12-08 11:48:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for delivery
-- ----------------------------
DROP TABLE IF EXISTS `delivery`;
CREATE TABLE `delivery` (
  `idDelivery` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) DEFAULT NULL,
  `idRestaurante` int(11) DEFAULT NULL,
  `estadodelivery` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idDelivery`),
  KEY `resta` (`idRestaurante`),
  KEY `usuari` (`idUsuario`),
  CONSTRAINT `resta` FOREIGN KEY (`idRestaurante`) REFERENCES `restaurante` (`idRestaurante`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `usuari` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of delivery
-- ----------------------------
INSERT INTO `delivery` VALUES ('120', null, '1', 'falta');
INSERT INTO `delivery` VALUES ('121', '11', '1', 'falta');

-- ----------------------------
-- Table structure for detalle_delivery
-- ----------------------------
DROP TABLE IF EXISTS `detalle_delivery`;
CREATE TABLE `detalle_delivery` (
  `idDelivery` int(11) DEFAULT NULL,
  `idPlato` int(11) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  KEY `delive` (`idDelivery`),
  KEY `plat` (`idPlato`),
  CONSTRAINT `delive` FOREIGN KEY (`idDelivery`) REFERENCES `delivery` (`idDelivery`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `plat` FOREIGN KEY (`idPlato`) REFERENCES `platos` (`idPlato`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of detalle_delivery
-- ----------------------------
INSERT INTO `detalle_delivery` VALUES ('120', '20', '(-6.47973955627637, -76.38119160197675)/ numero de casa: /136', '1');
INSERT INTO `detalle_delivery` VALUES ('120', '21', '(-6.47973955627637, -76.38119160197675)/ numero de casa: /136', '2');
INSERT INTO `detalle_delivery` VALUES ('121', '20', '(-6.479766207021548, -76.38118087314069)/ numero de casa: /136', '1');
INSERT INTO `detalle_delivery` VALUES ('121', '21', '(-6.479766207021548, -76.38118087314069)/ numero de casa: /136', '1');
INSERT INTO `detalle_delivery` VALUES ('121', '22', '(-6.479766207021548, -76.38118087314069)/ numero de casa: /136', '2');

-- ----------------------------
-- Table structure for platos
-- ----------------------------
DROP TABLE IF EXISTS `platos`;
CREATE TABLE `platos` (
  `idPlato` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `idRestaurante` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPlato`),
  KEY `restaur` (`idRestaurante`),
  CONSTRAINT `restaur` FOREIGN KEY (`idRestaurante`) REFERENCES `restaurante` (`idRestaurante`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of platos
-- ----------------------------
INSERT INTO `platos` VALUES ('20', 'parrillada', '12', 'pollo a la parrilla', 'descarga.jpg', '1');
INSERT INTO `platos` VALUES ('21', 'arros con pollo', '14', 'rico aroz con pollo', 'arros con pollo.jpg', '1');
INSERT INTO `platos` VALUES ('22', 'pescado frito', '16', 'pescado arroz ensalada', 'pescado frito.jpg', '1');

-- ----------------------------
-- Table structure for restaurante
-- ----------------------------
DROP TABLE IF EXISTS `restaurante`;
CREATE TABLE `restaurante` (
  `idRestaurante` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `tipoRestauran` varchar(100) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idRestaurante`),
  KEY `idusuar` (`idUsuario`),
  CONSTRAINT `idusuar` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of restaurante
-- ----------------------------
INSERT INTO `restaurante` VALUES ('1', 'pollo con papas', 'hallame si puedes', '234234', null, '12', 'imagen.jpg');
INSERT INTO `restaurante` VALUES ('2', 'masticar', 'sadfsdfas', '2343', null, '13', 'ninos.jpg');
INSERT INTO `restaurante` VALUES ('3', 'pollos con papas', 'sdfsadfsdf', '12334', null, '14', 'npcsdf.jpg');

-- ----------------------------
-- Table structure for tipousuario
-- ----------------------------
DROP TABLE IF EXISTS `tipousuario`;
CREATE TABLE `tipousuario` (
  `idTipoUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idTipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tipousuario
-- ----------------------------
INSERT INTO `tipousuario` VALUES ('1', 'cliente');
INSERT INTO `tipousuario` VALUES ('2', 'empresa');

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `nombre_empresa` varchar(100) DEFAULT NULL,
  `idTipoUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `tipous` (`idTipoUsuario`),
  CONSTRAINT `tipous` FOREIGN KEY (`idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('11', 'ewo1991', '123', 'milton', 'becerra', 'sdfas@hotmail.com', 'werw', '530000', 'nina.jpg', '1');
INSERT INTO `usuario` VALUES ('12', 'milton', '123', null, 'pezo', 'brayan_666_91@hotmail.com', 'weqwe', '345', 'polleria', '2');
INSERT INTO `usuario` VALUES ('13', 'gogeta654', '123', 'andre', 'peres', 'sdfasd@hotmail.com', null, null, null, '2');
INSERT INTO `usuario` VALUES ('14', 'pollospapas', '123', 'jewel', 'sangama', 'sdfas_45@hotmail.com', null, null, null, '2');
