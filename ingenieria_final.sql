-- MySQL dump 10.13  Distrib 5.6.25, for osx10.8 (x86_64)
--
-- Host: localhost    Database: ingenieria
-- ------------------------------------------------------
-- Server version	5.6.25

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
  KEY `boleta` (`boleta`),
  CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`boleta`) REFERENCES `persona` (`idPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES ('2014630002','CACJ950812HDFKNO03','A15','Ingeniería en sistemas computacionales','09',NULL,58.5,8.5,'55555555','555555555','javisever2@gmail.com',0),('2014630206',NULL,NULL,'Ingeniería en sistemas computacionales',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),('2014630645','MARA950406HDFLSO94','B14','Ingeniería en sistemas computacionales','09',NULL,62,9.5,'55555555','555555555','alberto.maldo1312@gmail.com',1),('2016635489','GOVJ970806HDFPAZ09','A16','Ingeniería en sistemas computacionales','09',NULL,20,8,'55555555','555555555','jacinto@gmail.com',0);
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
INSERT INTO `area` VALUES ('A01','Area de becas','Departamento de Extensión y Apoyos Educativos'),('A02','Control escolar','Departamento de control Escolar');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
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
-- Table structure for table `estadoTramite`
--

DROP TABLE IF EXISTS `estadoTramite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estadoTramite` (
  `idEstado` int(1) NOT NULL AUTO_INCREMENT,
  `Estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estadoTramite`
--

LOCK TABLES `estadoTramite` WRITE;
/*!40000 ALTER TABLE `estadoTramite` DISABLE KEYS */;
INSERT INTO `estadoTramite` VALUES (1,'Solicitado'),(2,'Impreso'),(3,'En firma'),(4,'Listo'),(5,'Entregado');
/*!40000 ALTER TABLE `estadoTramite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudianteInscrito`
--

DROP TABLE IF EXISTS `estudianteInscrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudianteInscrito` (
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
-- Dumping data for table `estudianteInscrito`
--

LOCK TABLES `estudianteInscrito` WRITE;
/*!40000 ALTER TABLE `estudianteInscrito` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudianteInscrito` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motivo`
--

LOCK TABLES `motivo` WRITE;
/*!40000 ALTER TABLE `motivo` DISABLE KEYS */;
INSERT INTO `motivo` VALUES (1,'Ninguno'),(2,'Actividad Cultural'),(3,'Actividad Deportiva'),(4,'Beca');
/*!40000 ALTER TABLE `motivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `motivoSolicitud`
--

DROP TABLE IF EXISTS `motivoSolicitud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `motivoSolicitud` (
  `idMotivoSol` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idMotivoSol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motivoSolicitud`
--

LOCK TABLES `motivoSolicitud` WRITE;
/*!40000 ALTER TABLE `motivoSolicitud` DISABLE KEYS */;
INSERT INTO `motivoSolicitud` VALUES (1,'Enfermedad'),(2,'Fuera de la ciudad');
/*!40000 ALTER TABLE `motivoSolicitud` ENABLE KEYS */;
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
INSERT INTO `persona` VALUES ('12345','José Francisco','Serrano','García','12345678'),('2014630002','Javier','Chávez','Chávez','12345678'),('2014630206','Juan Antonio','Guzmán ','Chávez','12345678'),('2014630645','Alberto','Maldonado','Romo','12345678'),('2016635489','Jacinto','Gonzalez','Velez','12345678');
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
  CONSTRAINT `solicitanteajeno_ibfk_1` FOREIGN KEY (`idMotivo`) REFERENCES `motivoSolicitud` (`idMotivoSol`),
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
INSERT INTO `solicitud` VALUES (5,1,1,NULL,'2014630002','2016-10-14',0),(6,1,2,NULL,'2014630002','2016-10-14',0),(7,1,2,NULL,'2014630002','2016-10-17',0),(8,1,2,NULL,'2014630002','2016-10-17',0),(9,2,3,NULL,'2014630002','2016-10-17',0),(10,2,3,NULL,'2014630002','2016-10-17',0),(11,2,3,NULL,'2014630002','2016-10-17',0),(12,2,3,NULL,'2014630002','2016-10-17',0);
/*!40000 ALTER TABLE `solicitud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trabajadorArea`
--

DROP TABLE IF EXISTS `trabajadorArea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trabajadorArea` (
  `idTrabajador` varchar(10) NOT NULL,
  `idArea` varchar(10) DEFAULT 'A01',
  KEY `idTrabajador` (`idTrabajador`),
  KEY `idArea` (`idArea`),
  CONSTRAINT `trabajadorarea_ibfk_1` FOREIGN KEY (`idTrabajador`) REFERENCES `persona` (`idPersona`),
  CONSTRAINT `trabajadorarea_ibfk_2` FOREIGN KEY (`idArea`) REFERENCES `area` (`idArea`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabajadorArea`
--

LOCK TABLES `trabajadorArea` WRITE;
/*!40000 ALTER TABLE `trabajadorArea` DISABLE KEYS */;
INSERT INTO `trabajadorArea` VALUES ('12345','A01');
/*!40000 ALTER TABLE `trabajadorArea` ENABLE KEYS */;
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
  CONSTRAINT `tramite_ibfk_2` FOREIGN KEY (`idEstado`) REFERENCES `estadoTramite` (`idEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tramite`
--

LOCK TABLES `tramite` WRITE;
/*!40000 ALTER TABLE `tramite` DISABLE KEYS */;
INSERT INTO `tramite` VALUES (2,1,'12345'),(3,1,'12345'),(4,1,'12345'),(5,4,'12345'),(6,4,'12345'),(7,1,'12345'),(8,1,'12345'),(9,1,'12345'),(10,1,'12345'),(11,1,'12345'),(12,1,'12345');
/*!40000 ALTER TABLE `tramite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'ingenieria'
--
/*!50003 DROP PROCEDURE IF EXISTS `altaTramite` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `altaTramite`(in p_idDocumento int ,in p_idMotivo int ,in p_idAlumno varchar(10))
begin 
    DECLARE p_idEstado int;
    insert into tramite(idEstado,idAnalista) values(1,"12345");
    select idTramite into p_idEstado from tramite ORDER BY idTramite DESC LIMIT 1;
    insert into solicitud(idSolicitud,Documento_idDocumento,Motivo_idMotivo,idAlumno,Fecha,Aceptacion) values(p_idEstado,p_idDocumento,p_idMotivo,p_idAlumno,now(),0);
  end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-17 14:31:05
