/*
SQLyog Community v12.12 (64 bit)
MySQL - 5.6.17 : Database - ingenieria
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ingenieria` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `ingenieria`;

/*Table structure for table `alumno` */

DROP TABLE IF EXISTS `alumno`;

CREATE TABLE `alumno` (
  `boleta` varchar(10) NOT NULL,
  `CURP` varchar(45) DEFAULT NULL,
  `periodoIngreso` varchar(45) DEFAULT NULL,
  `carrera` varchar(45) DEFAULT NULL,
  `plan` varchar(45) DEFAULT NULL,
  `secuencia` varchar(45) DEFAULT NULL,
  `totalCreditos` float DEFAULT NULL,
  `promedio` float DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`boleta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `documento` */

DROP TABLE IF EXISTS `documento`;

CREATE TABLE `documento` (
  `idDocumento` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idDocumento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `estadotramite` */

DROP TABLE IF EXISTS `estadotramite`;

CREATE TABLE `estadotramite` (
  `idestadotramite` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idestadotramite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `estudiante/egresado` */

DROP TABLE IF EXISTS `estudiante/egresado`;

CREATE TABLE `estudiante/egresado` (
  `boleta` varchar(10) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `Semestre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`boleta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `motivo` */

DROP TABLE IF EXISTS `motivo`;

CREATE TABLE `motivo` (
  `idMotivo` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idMotivo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `persona` */

DROP TABLE IF EXISTS `persona`;

CREATE TABLE `persona` (
  `idPersona` varchar(10) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apPaterno` varchar(45) DEFAULT NULL,
  `apMaterno` varchar(45) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `solicitud` */

DROP TABLE IF EXISTS `solicitud`;

CREATE TABLE `solicitud` (
  `idSolocitud` int(11) NOT NULL AUTO_INCREMENT,
  `documento_idDocumento` int(11) DEFAULT NULL,
  `motivo_idMotivo` int(11) DEFAULT NULL,
  `idSolicitante` varchar(10) DEFAULT NULL,
  `idAlumno` varchar(10) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `aceptacion` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSolocitud`),
  KEY `documento_idDocumento` (`documento_idDocumento`),
  KEY `motivo_idMotivo` (`motivo_idMotivo`),
  CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`documento_idDocumento`) REFERENCES `documento` (`idDocumento`),
  CONSTRAINT `solicitud_ibfk_2` FOREIGN KEY (`motivo_idMotivo`) REFERENCES `motivo` (`idMotivo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Table structure for table `trabajadorarea` */

DROP TABLE IF EXISTS `trabajadorarea`;

CREATE TABLE `trabajadorarea` (
  `idPersona` varchar(10) DEFAULT NULL,
  `idArea` int(11) DEFAULT NULL,
  `RFC` varchar(15) DEFAULT NULL,
  `noEmpleado` varchar(10) DEFAULT NULL,
  KEY `idTrabajador` (`idPersona`),
  CONSTRAINT `trabajadorarea_ibfk_1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tramite` */

DROP TABLE IF EXISTS `tramite`;

CREATE TABLE `tramite` (
  `idTrámites` int(11) NOT NULL,
  `Documento_idDocumento` int(11) NOT NULL,
  `Motivo_idMotivo` int(11) NOT NULL,
  `solicitante` varchar(10) NOT NULL,
  `tramite_idestadotramite` int(11) DEFAULT NULL,
  PRIMARY KEY (`idTrámites`),
  KEY `fk_Tramite_Documento1_idx` (`Documento_idDocumento`),
  KEY `fk_Tramite_Motivo1_idx` (`Motivo_idMotivo`),
  KEY `fk_Tramite_Estudiante/Egresado1_idx` (`solicitante`),
  CONSTRAINT `fk_Tramite_Documento1` FOREIGN KEY (`Documento_idDocumento`) REFERENCES `documento` (`idDocumento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Tramite_Estudiante/Egresado1` FOREIGN KEY (`solicitante`) REFERENCES `estudiante/egresado` (`boleta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Tramite_Motivo1` FOREIGN KEY (`Motivo_idMotivo`) REFERENCES `motivo` (`idMotivo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
