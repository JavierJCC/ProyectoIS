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
  `CURP` varchar(18) DEFAULT NULL,
  `PeriodoIngreso` varchar(10) DEFAULT NULL,
  `Carrera` varchar(45) NOT NULL DEFAULT 'Ingenieria en sistemas computacionales',
  `plan` varchar(45) DEFAULT NULL,
  `Secuencia` varchar(45) DEFAULT NULL,
  `TotalCreditos` double DEFAULT NULL,
  `promedio` double DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `TelefonoMovil` varchar(10) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `inscrito` int(1) DEFAULT NULL,
  `egresado` int(1) NOT NULL DEFAULT '0',
  KEY `boleta` (`boleta`),
  CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`boleta`) REFERENCES `persona` (`idPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES ('2014630002','CACJ950812HDFKNO03','A15','Ingeniería en sistemas computacionales','09',NULL,58.5,8.5,'55555555','555555555','javisever2@gmail.com',0,0),('2014630206',NULL,NULL,'Ingeniería en sistemas computacionales',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0),('2014630645','MARA950406HDFLSO94','B14','Ingeniería en sistemas computacionales','09',NULL,62,9.5,'55555555','555555555','alberto.maldo1312@gmail.com',1,0),('2016635489','GOVJ970806HDFPAZ09','A16','Ingeniería en sistemas computacionales','09',NULL,20,8,'55555555','555555555','jacinto@gmail.com',0,0);
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
  `nombreArea` varchar(45) NOT NULL,
  `Departamento` varchar(45) NOT NULL,
  PRIMARY KEY (`idArea`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `area`
--

LOCK TABLES `area` WRITE;
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
INSERT INTO `area` VALUES ('A01','Área de becas','Departamento de Extensión y Apoyos Educativos'),('A02','Gestión Escolar','Departamento de Gestión Escolar'),('A03','Jefa de Gestión Escolar','Departamento de Control Escolar');
/*!40000 ALTER TABLE `area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documento`
--

DROP TABLE IF EXISTS `documento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documento` (
  `idDocumento` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idDocumento`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documento`
--

LOCK TABLES `documento` WRITE;
/*!40000 ALTER TABLE `documento` DISABLE KEYS */;
INSERT INTO `documento` VALUES (1,'Boleta global'),(2,'Boleta certificada'),(3,'Boleta departamental '),(4,'Constancia de inscripción'),(5,'Constancia de estudios'),(6,'Constancia con periodo vacacional'),(7,'Constancia para trámite de SS'),(8,'Constancia de prácticas profesionales'),(9,'Constancia de inscripción y horario');
/*!40000 ALTER TABLE `documento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estadotramite`
--

DROP TABLE IF EXISTS `estadotramite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estadotramite` (
  `idEstado` int(1) NOT NULL AUTO_INCREMENT,
  `Estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estadotramite`
--

LOCK TABLES `estadotramite` WRITE;
/*!40000 ALTER TABLE `estadotramite` DISABLE KEYS */;
INSERT INTO `estadotramite` VALUES (1,'Solicitado'),(2,'Impreso'),(3,'En firma'),(4,'Listo'),(5,'Entregado');
/*!40000 ALTER TABLE `estadotramite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudianteinscrito`
--

DROP TABLE IF EXISTS `estudianteinscrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudianteinscrito` (
  `boleta` varchar(10) NOT NULL,
  `semestre` int(1) NOT NULL,
  `MateriasInscritas` int(1) NOT NULL,
  `MateriasReprobadas` int(2) NOT NULL,
  `creditosInscritos` float DEFAULT NULL,
  KEY `boleta` (`boleta`),
  CONSTRAINT `estudianteinscrito_ibfk_1` FOREIGN KEY (`boleta`) REFERENCES `alumno` (`boleta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudianteinscrito`
--

LOCK TABLES `estudianteinscrito` WRITE;
/*!40000 ALTER TABLE `estudianteinscrito` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudianteinscrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `memorandum`
--

DROP TABLE IF EXISTS `memorandum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `memorandum` (
  `idMemorandum` int(11) NOT NULL AUTO_INCREMENT,
  `nombreArchivo` varchar(50) NOT NULL,
  `fechaSubido` date NOT NULL,
  `descargado` int(1) DEFAULT NULL,
  PRIMARY KEY (`idMemorandum`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `memorandum`
--

LOCK TABLES `memorandum` WRITE;
/*!40000 ALTER TABLE `memorandum` DISABLE KEYS */;
INSERT INTO `memorandum` VALUES (1,'Carta-Baja-Marce.docx','2016-10-22',1),(2,'plan30006412.pdf','2016-10-22',1);
/*!40000 ALTER TABLE `memorandum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `motivo`
--

DROP TABLE IF EXISTS `motivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `motivo` (
  `idmotivo` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idmotivo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motivo`
--

LOCK TABLES `motivo` WRITE;
/*!40000 ALTER TABLE `motivo` DISABLE KEYS */;
INSERT INTO `motivo` VALUES (1,'Ninguno'),(2,'Actividad Cultural'),(3,'Actividad Deportiva'),(4,'Beca'),(5,'Idioma'),(6,'Curso externo');
/*!40000 ALTER TABLE `motivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `motivosolicitud`
--

DROP TABLE IF EXISTS `motivosolicitud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `motivosolicitud` (
  `idMotivoSol` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idMotivoSol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motivosolicitud`
--

LOCK TABLES `motivosolicitud` WRITE;
/*!40000 ALTER TABLE `motivosolicitud` DISABLE KEYS */;
INSERT INTO `motivosolicitud` VALUES (1,'Enfermedad'),(2,'Fuera de la ciudad');
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
  `nom` varchar(45) NOT NULL,
  `apPat` varchar(45) NOT NULL,
  `apMat` varchar(45) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (' bc c','','','',NULL),('12345','José Francisco','Pérez','García','12345678'),('2014630002','Javier','Chávez','Chávez','12345678'),('2014630206','Juan Antonio','Guzmán ','Chávez','12345678'),('2014630645','Alberto','Maldonado','Romo','12345678'),('2015630074','Juan','Gómez ','Castro',NULL),('2016635489','Jacinto','Gonzalez','Velez','12345678'),('24','Marcela','Castro','Flores',NULL),('27','Gabriela','Castro','Flores','12345'),('56789','RubÃ©n','Murga','Dionicio',NULL),('567891','RubÃ©n','Murga','Dionicio',NULL),('5678912','RubÃ©n','Murga','Dionicio',NULL),('56789123','Rubén','Murga','Dionicio',NULL),('90','Pedro','Pérez','Godínez',NULL),('987','Jorge','López','Gutierrez',NULL),('gfgg','','','',NULL),('hhh','','','',NULL);
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitanteajeno`
--

DROP TABLE IF EXISTS `solicitanteajeno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitanteajeno` (
  `idSolicitanteAjeno` varchar(10) NOT NULL,
  `idMotivo` int(11) DEFAULT NULL,
  KEY `idMotivo` (`idMotivo`),
  KEY `idSolicitanteAjeno` (`idSolicitanteAjeno`),
  CONSTRAINT `solicitanteajeno_ibfk_1` FOREIGN KEY (`idMotivo`) REFERENCES `motivosolicitud` (`idMotivoSol`),
  CONSTRAINT `solicitanteajeno_ibfk_2` FOREIGN KEY (`idSolicitanteAjeno`) REFERENCES `persona` (`idPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
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
  `idSolicitante` varchar(10) DEFAULT NULL,
  `idAlumno` varchar(10) DEFAULT NULL,
  `fecha` date NOT NULL,
  `Aceptacion` int(1) DEFAULT NULL,
  KEY `idAlumno` (`idAlumno`),
  KEY `idSolicitante` (`idSolicitante`),
  KEY `Motivo_idMotivo` (`Motivo_idMotivo`),
  KEY `Documento_idDocumento` (`Documento_idDocumento`),
  CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`boleta`),
  CONSTRAINT `solicitud_ibfk_2` FOREIGN KEY (`idSolicitante`) REFERENCES `persona` (`idPersona`),
  CONSTRAINT `solicitud_ibfk_3` FOREIGN KEY (`Motivo_idMotivo`) REFERENCES `motivo` (`idmotivo`),
  CONSTRAINT `solicitud_ibfk_4` FOREIGN KEY (`Documento_idDocumento`) REFERENCES `documento` (`idDocumento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitud`
--

LOCK TABLES `solicitud` WRITE;
/*!40000 ALTER TABLE `solicitud` DISABLE KEYS */;
INSERT INTO `solicitud` VALUES (5,1,1,NULL,'2014630002','2016-10-14',0),(6,1,2,NULL,'2014630002','2016-10-14',0),(7,1,2,NULL,'2014630002','2016-10-17',0),(8,1,2,NULL,'2014630002','2016-10-17',0),(9,2,3,NULL,'2014630002','2016-10-17',0),(10,2,3,NULL,'2014630002','2016-10-17',0),(11,2,3,NULL,'2014630002','2016-10-17',0),(12,2,3,NULL,'2014630002','2016-10-17',0),(13,2,4,NULL,'2014630002','2016-10-20',0);
/*!40000 ALTER TABLE `solicitud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trabajadorarea`
--

DROP TABLE IF EXISTS `trabajadorarea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trabajadorarea` (
  `idTrabajador` varchar(10) NOT NULL,
  `idArea` varchar(10) DEFAULT 'A01',
  `RFC` varchar(18) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  KEY `idTrabajador` (`idTrabajador`),
  KEY `idArea` (`idArea`),
  CONSTRAINT `trabajadorarea_ibfk_1` FOREIGN KEY (`idTrabajador`) REFERENCES `persona` (`idPersona`),
  CONSTRAINT `trabajadorarea_ibfk_2` FOREIGN KEY (`idArea`) REFERENCES `area` (`idArea`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabajadorarea`
--

LOCK TABLES `trabajadorarea` WRITE;
/*!40000 ALTER TABLE `trabajadorarea` DISABLE KEYS */;
INSERT INTO `trabajadorarea` VALUES ('12345','A01','JFPG','pepito@gmail.com',0),('56789123','A01','dfsdf','ruben.murga.d@gmail.com',0),('987','A02','LOPEZ1234','dfsdfs@gmail',1),('24','A02','MCF961104','march.castrof@gmail.com',1),('27','A03','GAB270990','gabz.cf@gmail.com',1),('90','A01','PEREZ243','pedro@hotmail.com',1),('2015630074','A01','JUAN2345','juanito@gmail.com',1);
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
  `idEstado` int(1) NOT NULL,
  `idAnalista` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idTramite`),
  KEY `idAnalista` (`idAnalista`),
  KEY `idEstado` (`idEstado`),
  CONSTRAINT `tramite_ibfk_1` FOREIGN KEY (`idAnalista`) REFERENCES `persona` (`idPersona`),
  CONSTRAINT `tramite_ibfk_2` FOREIGN KEY (`idEstado`) REFERENCES `estadotramite` (`idEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tramite`
--

LOCK TABLES `tramite` WRITE;
/*!40000 ALTER TABLE `tramite` DISABLE KEYS */;
INSERT INTO `tramite` VALUES (2,1,'12345'),(3,1,'12345'),(4,1,'12345'),(5,4,'12345'),(6,4,'12345'),(7,3,'12345'),(8,1,'12345'),(9,4,'12345'),(10,1,'12345'),(11,1,'12345'),(12,1,'12345'),(13,1,'12345');
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

-- Dump completed on 2016-10-28 20:38:07
