-- MySQL dump 10.13  Distrib 5.7.13, for Win64 (x86_64)
--
-- Host: localhost    Database: ingenieria
-- ------------------------------------------------------
-- Server version	5.7.13-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES ('2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'hola');
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documento`
--

DROP TABLE IF EXISTS `documento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documento` (
  `idDocumento` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idDocumento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documento`
--

LOCK TABLES `documento` WRITE;
/*!40000 ALTER TABLE `documento` DISABLE KEYS */;
INSERT INTO `documento` VALUES (1,'Boleta'),(2,'Constancia');
/*!40000 ALTER TABLE `documento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiante/egresado`
--

DROP TABLE IF EXISTS `estudiante/egresado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiante/egresado` (
  `boleta` varchar(10) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `Semestre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`boleta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiante/egresado`
--

LOCK TABLES `estudiante/egresado` WRITE;
/*!40000 ALTER TABLE `estudiante/egresado` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudiante/egresado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `motivo`
--

DROP TABLE IF EXISTS `motivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `motivo` (
  `idMotivo` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idMotivo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motivo`
--

LOCK TABLES `motivo` WRITE;
/*!40000 ALTER TABLE `motivo` DISABLE KEYS */;
INSERT INTO `motivo` VALUES (0,'Ninguno'),(1,'Actividad Cultural'),(2,'Actividad Deportiva');
/*!40000 ALTER TABLE `motivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `idPersona` varchar(10) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apPaterno` varchar(45) DEFAULT NULL,
  `apMaterno` varchar(45) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES ('123','a',NULL,NULL,'a');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitud`
--

DROP TABLE IF EXISTS `solicitud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitud`
--

LOCK TABLES `solicitud` WRITE;
/*!40000 ALTER TABLE `solicitud` DISABLE KEYS */;
INSERT INTO `solicitud` VALUES (1,1,1,NULL,'2','2016-10-11 12:06:51',0),(2,2,2,NULL,'2','2016-10-11 12:06:51',0),(3,1,1,NULL,'2','2016-10-11 12:12:50',0);
/*!40000 ALTER TABLE `solicitud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trabajadorarea`
--

DROP TABLE IF EXISTS `trabajadorarea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trabajadorarea` (
  `idPersona` varchar(10) DEFAULT NULL,
  `idArea` int(11) DEFAULT NULL,
  `RFC` varchar(15) DEFAULT NULL,
  `noEmpleado` varchar(10) DEFAULT NULL,
  KEY `idTrabajador` (`idPersona`),
  CONSTRAINT `trabajadorarea_ibfk_1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabajadorarea`
--

LOCK TABLES `trabajadorarea` WRITE;
/*!40000 ALTER TABLE `trabajadorarea` DISABLE KEYS */;
/*!40000 ALTER TABLE `trabajadorarea` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tramite`
--

DROP TABLE IF EXISTS `tramite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tramite` (
  `idTrámites` int(11) NOT NULL,
  `Documento_idDocumento` int(11) NOT NULL,
  `Motivo_idMotivo` int(11) NOT NULL,
  `solicitante` varchar(10) NOT NULL,
  PRIMARY KEY (`idTrámites`),
  KEY `fk_Tramite_Documento1_idx` (`Documento_idDocumento`),
  KEY `fk_Tramite_Motivo1_idx` (`Motivo_idMotivo`),
  KEY `fk_Tramite_Estudiante/Egresado1_idx` (`solicitante`),
  CONSTRAINT `fk_Tramite_Documento1` FOREIGN KEY (`Documento_idDocumento`) REFERENCES `documento` (`idDocumento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Tramite_Estudiante/Egresado1` FOREIGN KEY (`solicitante`) REFERENCES `estudiante/egresado` (`boleta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Tramite_Motivo1` FOREIGN KEY (`Motivo_idMotivo`) REFERENCES `motivo` (`idMotivo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tramite`
--

LOCK TABLES `tramite` WRITE;
/*!40000 ALTER TABLE `tramite` DISABLE KEYS */;
/*!40000 ALTER TABLE `tramite` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-11 23:06:36
