-- MySQL dump 10.13  Distrib 5.6.25, for Win64 (x86_64)
--
-- Host: localhost    Database: ingenieria
-- ------------------------------------------------------
-- Server version	5.7.14

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
  `Boleta` varchar(10) NOT NULL,
  `CURP` varchar(18) NOT NULL,
  `PeriodoIngreso` varchar(10) NOT NULL,
  `Carrera` varchar(45) NOT NULL DEFAULT 'Ingeniería en sistemas computacionales',
  `Plan` varchar(45) NOT NULL,
  `Secuencia` varchar(45) DEFAULT NULL,
  `TotalCreditos` varchar(45) NOT NULL,
  `Promedio` varchar(45) NOT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `TelefonoMovil` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Boleta`),
  UNIQUE KEY `CURP_UNIQUE` (`CURP`),
  KEY `Boleta_Solicitante_idx` (`Boleta`),
  CONSTRAINT `fk_Boleta_Solicitante` FOREIGN KEY (`Boleta`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES ('2014630002','CACJ950812HDFKNO03','A15','Ingeniería en sistemas computacionales','09',NULL,'58.5','8.5','55555555','555555555','javisever2@gmail.com'),('2014630645','MARA950406HDFLSO94','B14','Ingeniería en sistemas computacionales','09',NULL,'62','9.5','55555555','555555555','alberto.maldo1312@gmail.com'),('2016635489','GOVJ970806HDFPAZ09','A16','Ingeniería en sistemas computacionales','09',NULL,'20','8','55555555','555555555','jacinto@gmail.com');
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `area`
--

DROP TABLE IF EXISTS `area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `area` (
  `idArea` varchar(10) NOT NULL,
  `NombreArea` varchar(45) NOT NULL,
  `Departamento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idArea`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `area`
--

LOCK TABLES `area` WRITE;
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
INSERT INTO `area` VALUES ('A01','Area de becas','Departamento de Extensión y Apoyos Educativos');
/*!40000 ALTER TABLE `area` ENABLE KEYS */;
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
-- Table structure for table `estadotramite`
--

DROP TABLE IF EXISTS `estadotramite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estadotramite` (
  `idEstadoTramite` int(11) NOT NULL,
  `Estado` varchar(10) NOT NULL,
  PRIMARY KEY (`idEstadoTramite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estadotramite`
--

LOCK TABLES `estadotramite` WRITE;
/*!40000 ALTER TABLE `estadotramite` DISABLE KEYS */;
/*!40000 ALTER TABLE `estadotramite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudianteinscrito`
--

DROP TABLE IF EXISTS `estudianteinscrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudianteinscrito` (
  `Boleta` varchar(10) NOT NULL,
  `Semestre` int(11) NOT NULL,
  `MateriasInscritas` int(11) DEFAULT NULL,
  `MateriasReprobadas` int(11) DEFAULT NULL,
  `CreditosInscritos` float DEFAULT NULL,
  PRIMARY KEY (`Boleta`),
  KEY `Est_Estinscrito_idx` (`Boleta`),
  CONSTRAINT `Est_Estinscrito` FOREIGN KEY (`Boleta`) REFERENCES `alumno` (`Boleta`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudianteinscrito`
--

LOCK TABLES `estudianteinscrito` WRITE;
/*!40000 ALTER TABLE `estudianteinscrito` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudianteinscrito` ENABLE KEYS */;
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
INSERT INTO `motivo` VALUES (0,'Ninguno'),(1,'Actividad Cultural'),(2,'Actividad Deportiva'),(3,'Beca');
/*!40000 ALTER TABLE `motivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `motivosolicitud`
--

DROP TABLE IF EXISTS `motivosolicitud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `motivosolicitud` (
  `idmotivosol` int(11) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`idmotivosol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motivosolicitud`
--

LOCK TABLES `motivosolicitud` WRITE;
/*!40000 ALTER TABLE `motivosolicitud` DISABLE KEYS */;
/*!40000 ALTER TABLE `motivosolicitud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `idPersona` varchar(10) NOT NULL,
  `Nom` varchar(45) NOT NULL,
  `ApPat` varchar(45) NOT NULL,
  `ApMat` varchar(45) DEFAULT NULL,
  `Contrasenia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES ('1234567890','José Francisco','Serrano','García','12345678'),('2014630002','Javier','Chávez','Chávez','12345678'),('2014630645','Alberto','Maldonado','Romo','12345678'),('2016635489','Jacinto','Gonzalez','Velez','12345678');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitanteajeno`
--

DROP TABLE IF EXISTS `solicitanteajeno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitanteajeno` (
  `idsolicitanteAjeno` varchar(10) NOT NULL,
  `idmotivo` int(11) NOT NULL,
  PRIMARY KEY (`idsolicitanteAjeno`),
  KEY `fk_Solicitante_Motivo_idx` (`idmotivo`),
  KEY `fk_Solicitante_SolicitanteA_idx` (`idsolicitanteAjeno`),
  CONSTRAINT `fk_Solicitante_Motivo` FOREIGN KEY (`idmotivo`) REFERENCES `motivosolicitud` (`idmotivosol`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Solicitante_SolicitanteA` FOREIGN KEY (`idsolicitanteAjeno`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitanteajeno`
--

LOCK TABLES `solicitanteajeno` WRITE;
/*!40000 ALTER TABLE `solicitanteajeno` DISABLE KEYS */;
/*!40000 ALTER TABLE `solicitanteajeno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitud`
--

DROP TABLE IF EXISTS `solicitud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitud` (
  `idSolicitud` int(11) NOT NULL,
  `Documento_idDocumento` int(11) NOT NULL,
  `Motivo_idMotivo` int(11) NOT NULL,
  `idSolicitante` varchar(10) NOT NULL,
  `idAlumno` varchar(10) NOT NULL,
  `Fecha` date NOT NULL,
  `Aceptacion` int(11) NOT NULL,
  PRIMARY KEY (`idSolicitud`),
  KEY `fk_Tramite_Documento1_idx` (`Documento_idDocumento`),
  KEY `fk_Tramite_Motivo1_idx` (`Motivo_idMotivo`),
  KEY `fk_Solicitud_Solicitante_idx` (`idSolicitante`),
  KEY `fk_Solicitud_Alumno_idx` (`idAlumno`),
  CONSTRAINT `fk_Solicitud_Alumno` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`Boleta`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Solicitud_Documento1` FOREIGN KEY (`Documento_idDocumento`) REFERENCES `documento` (`idDocumento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Solicitud_Motivo1` FOREIGN KEY (`Motivo_idMotivo`) REFERENCES `motivo` (`idMotivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Solicitud_Solicitante` FOREIGN KEY (`idSolicitante`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitud`
--

LOCK TABLES `solicitud` WRITE;
/*!40000 ALTER TABLE `solicitud` DISABLE KEYS */;
INSERT INTO `solicitud` VALUES (1,1,0,'2014630002','2014630002','2016-10-10',3),(2,2,3,'1234567890','2014630645','2016-10-10',3),(3,2,3,'1234567890','2016635489','2016-10-10',3);
/*!40000 ALTER TABLE `solicitud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trabajadorarea`
--

DROP TABLE IF EXISTS `trabajadorarea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trabajadorarea` (
  `IdTrabajador` varchar(10) NOT NULL,
  `IdArea` varchar(10) NOT NULL,
  PRIMARY KEY (`IdTrabajador`),
  KEY `Trab_Solicitante_idx` (`IdTrabajador`),
  KEY `Trab_Area_idx` (`IdArea`),
  CONSTRAINT `fk_Trab_Area` FOREIGN KEY (`IdArea`) REFERENCES `area` (`idArea`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Trab_Solicitante` FOREIGN KEY (`IdTrabajador`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabajadorarea`
--

LOCK TABLES `trabajadorarea` WRITE;
/*!40000 ALTER TABLE `trabajadorarea` DISABLE KEYS */;
INSERT INTO `trabajadorarea` VALUES ('1234567890','A01');
/*!40000 ALTER TABLE `trabajadorarea` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tramite`
--

DROP TABLE IF EXISTS `tramite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tramite` (
  `idTramite` int(11) NOT NULL AUTO_INCREMENT,
  `idEstado` int(11) NOT NULL,
  `idAnalista` varchar(10) NOT NULL,
  PRIMARY KEY (`idTramite`,`idEstado`,`idAnalista`),
  KEY `fk_Tramite_Estado_idx` (`idEstado`),
  KEY `fk_Tramite_Analista_idx` (`idAnalista`),
  CONSTRAINT `fk_Tramite_Analista` FOREIGN KEY (`idAnalista`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Tramite_Estado` FOREIGN KEY (`idEstado`) REFERENCES `estadotramite` (`idEstadoTramite`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Tramite_Solicitud` FOREIGN KEY (`idTramite`) REFERENCES `solicitud` (`idSolicitud`) ON DELETE CASCADE ON UPDATE CASCADE
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

-- Dump completed on 2016-10-10 15:30:39
