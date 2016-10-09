-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ingenieria
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `ingenieria` ;

-- -----------------------------------------------------
-- Schema ingenieria
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ingenieria` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;
USE `ingenieria` ;

-- -----------------------------------------------------
-- Table `documento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `documento` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `documento` (
  `idDocumento` INT(11) NOT NULL COMMENT '',
  `nombre` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`idDocumento`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `Solicitante`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Solicitante` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `Solicitante` (
  `idSolicitante` VARCHAR(10) NOT NULL COMMENT '',
  `Nom` VARCHAR(45) NOT NULL COMMENT '',
  `ApPat` VARCHAR(45) NOT NULL COMMENT '',
  `ApMat` VARCHAR(45) NULL COMMENT '',
  `Contrasenia` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idSolicitante`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `motivo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `motivo` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `motivo` (
  `idMotivo` INT(11) NOT NULL COMMENT '',
  `nombre` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`idMotivo`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `Analista`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Analista` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `Analista` (
  `idAnalista` VARCHAR(10) NOT NULL COMMENT '',
  `Nom` VARCHAR(45) NOT NULL COMMENT '',
  `ApPat` VARCHAR(45) NOT NULL COMMENT '',
  `ApMat` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idAnalista`)  COMMENT '')
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `EstadoTramite`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EstadoTramite` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `EstadoTramite` (
  `idEstadoTramite` INT NOT NULL COMMENT '',
  `Estado` VARCHAR(10) NOT NULL COMMENT '',
  PRIMARY KEY (`idEstadoTramite`)  COMMENT '')
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `tramite`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tramite` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `tramite` (
  `idTramite` INT(11) NOT NULL COMMENT '',
  `Documento_idDocumento` INT(11) NOT NULL COMMENT '',
  `Motivo_idMotivo` INT(11) NOT NULL COMMENT '',
  `boleta` VARCHAR(10) NOT NULL COMMENT '',
  `solicitante` VARCHAR(10) NOT NULL COMMENT '',
  `Fecha` DATE NOT NULL COMMENT '',
  `idAnalista` VARCHAR(10) NOT NULL COMMENT '',
  `idEstado` INT NOT NULL COMMENT '',
  `Aceptacion` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idTramite`)  COMMENT '',
  CONSTRAINT `fk_Tramite_Documento1`
    FOREIGN KEY (`Documento_idDocumento`)
    REFERENCES `documento` (`idDocumento`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Tramite_Solicitante`
    FOREIGN KEY (`solicitante`)
    REFERENCES `Solicitante` (`idSolicitante`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Tramite_Motivo1`
    FOREIGN KEY (`Motivo_idMotivo`)
    REFERENCES `motivo` (`idMotivo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Tramite_Analista`
    FOREIGN KEY (`idAnalista`)
    REFERENCES `Analista` (`idAnalista`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Tramite_Estado`
    FOREIGN KEY (`idEstado`)
    REFERENCES `EstadoTramite` (`idEstadoTramite`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Tramite_Estudiante`
    FOREIGN KEY (`boleta`)
    REFERENCES `Solicitante` (`idSolicitante`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;
CREATE INDEX `fk_Tramite_Documento1_idx` ON `tramite` (`Documento_idDocumento` ASC)  COMMENT '';

SHOW WARNINGS;
CREATE INDEX `fk_Tramite_Motivo1_idx` ON `tramite` (`Motivo_idMotivo` ASC)  COMMENT '';

SHOW WARNINGS;
CREATE INDEX `fk_Tramite_Estudiante/Egresado1_idx` ON `tramite` (`solicitante` ASC)  COMMENT '';

SHOW WARNINGS;
CREATE INDEX `fk_Tramite_Analista_idx` ON `tramite` (`idAnalista` ASC)  COMMENT '';

SHOW WARNINGS;
CREATE INDEX `fk_Tramite_Estado_idx` ON `tramite` (`idEstado` ASC)  COMMENT '';

SHOW WARNINGS;
CREATE INDEX `fk_Tramite_Estudiante_idx` ON `tramite` (`boleta` ASC)  COMMENT '';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `EstudianteEgresadoBaja`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EstudianteEgresadoBaja` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `EstudianteEgresadoBaja` (
  `Boleta` VARCHAR(10) NOT NULL COMMENT '',
  `CURP` VARCHAR(12) NOT NULL COMMENT '',
  `PeriodoIngreso` VARCHAR(10) NOT NULL COMMENT '',
  `Carrera` VARCHAR(45) NOT NULL DEFAULT 'Ingeniería en sistemas computacionales' COMMENT '',
  `Plan` VARCHAR(45) NOT NULL COMMENT '',
  `Secuencia` VARCHAR(45) NULL COMMENT '',
  `TotalCreditos` VARCHAR(45) NOT NULL COMMENT '',
  `Promedio` VARCHAR(45) NOT NULL COMMENT '',
  `Telefono` VARCHAR(45) NULL COMMENT '',
  `TelefonoMovil` VARCHAR(45) NULL COMMENT '',
  `Email` VARCHAR(45) NULL COMMENT '',
  CONSTRAINT `fk_Boleta_Solicitante`
    FOREIGN KEY (`Boleta`)
    REFERENCES `Solicitante` (`idSolicitante`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `Boleta_Solicitante_idx` ON `EstudianteEgresadoBaja` (`Boleta` ASC)  COMMENT '';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `EstudianteInscrito`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EstudianteInscrito` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `EstudianteInscrito` (
  `Boleta` VARCHAR(10) NOT NULL COMMENT '',
  `Semestre` INT NOT NULL COMMENT '',
  `MateriasInscritas` INT NULL COMMENT '',
  `MateriasReprobadas` INT NULL COMMENT '',
  `CreditosInscritos` FLOAT NULL COMMENT '',
  CONSTRAINT `Est_Estinscrito`
    FOREIGN KEY (`Boleta`)
    REFERENCES `EstudianteEgresadoBaja` (`Boleta`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `Est_Estinscrito_idx` ON `EstudianteInscrito` (`Boleta` ASC)  COMMENT '';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `Area`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Area` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `Area` (
  `idArea` VARCHAR(10) NOT NULL COMMENT '',
  `NombreArea` VARCHAR(45) NOT NULL COMMENT '',
  `Departamento` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idArea`)  COMMENT '')
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `TrabajadorArea`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `TrabajadorArea` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `TrabajadorArea` (
  `IdTrabajador` VARCHAR(10) NOT NULL COMMENT '',
  `IdArea` VARCHAR(10) NOT NULL COMMENT '',
  CONSTRAINT `fk_Trab_Solicitante`
    FOREIGN KEY (`IdTrabajador`)
    REFERENCES `Solicitante` (`idSolicitante`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Trab_Area`
    FOREIGN KEY (`IdArea`)
    REFERENCES `Area` (`idArea`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `Trab_Solicitante_idx` ON `TrabajadorArea` (`IdTrabajador` ASC)  COMMENT '';

SHOW WARNINGS;
CREATE INDEX `Trab_Area_idx` ON `TrabajadorArea` (`IdArea` ASC)  COMMENT '';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `motivosolicitud`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `motivosolicitud` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `motivosolicitud` (
  `idmotivosol` INT NOT NULL COMMENT '',
  `Descripcion` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`idmotivosol`)  COMMENT '')
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `solicitanteAjeno`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `solicitanteAjeno` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `solicitanteAjeno` (
  `idsolicitanteAjeno` VARCHAR(10) NOT NULL COMMENT '',
  `idmotivo` INT NOT NULL COMMENT '',
  CONSTRAINT `fk_Solicitante_Motivo`
    FOREIGN KEY (`idmotivo`)
    REFERENCES `motivosolicitud` (`idmotivosol`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Solicitante_SolicitanteA`
    FOREIGN KEY (`idsolicitanteAjeno`)
    REFERENCES `Solicitante` (`idSolicitante`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_Solicitante_Motivo_idx` ON `solicitanteAjeno` (`idmotivo` ASC)  COMMENT '';

SHOW WARNINGS;
CREATE INDEX `fk_Solicitante_SolicitanteA_idx` ON `solicitanteAjeno` (`idsolicitanteAjeno` ASC)  COMMENT '';

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
