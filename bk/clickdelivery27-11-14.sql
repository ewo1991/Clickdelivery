/*
Navicat MySQL Data Transfer

Source Server         : milton
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : clickdelivery

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2014-11-27 19:35:59
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
  PRIMARY KEY (`idDelivery`),
  KEY `resta` (`idRestaurante`),
  KEY `usuari` (`idUsuario`),
  CONSTRAINT `resta` FOREIGN KEY (`idRestaurante`) REFERENCES `restaurante` (`idRestaurante`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `usuari` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of delivery
-- ----------------------------

-- ----------------------------
-- Table structure for detalle_delivery
-- ----------------------------
DROP TABLE IF EXISTS `detalle_delivery`;
CREATE TABLE `detalle_delivery` (
  `idDelivery` int(11) DEFAULT NULL,
  `idPlato` int(11) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  KEY `delive` (`idDelivery`),
  KEY `plat` (`idPlato`),
  CONSTRAINT `delive` FOREIGN KEY (`idDelivery`) REFERENCES `delivery` (`idDelivery`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `plat` FOREIGN KEY (`idPlato`) REFERENCES `platos` (`idPlato`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of detalle_delivery
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of platos
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of restaurante
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('11', 'ewo1991', '123', 'milton', 'becerra', 'sdfas@hotmail.com', 'werw', '530000', null, '1');
INSERT INTO `usuario` VALUES ('12', 'milton', '123', null, 'pezo', 'sdfsd@hotmail.com', 'weqwe', '345', 'polleria', '2');
