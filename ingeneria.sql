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
USE `ingenieria` ;

-- -----------------------------------------------------
-- Table `documento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `documento` ;

CREATE TABLE IF NOT EXISTS `documento` (
  `idDocumento` INT(11) NOT NULL COMMENT '',
  `nombre` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`idDocumento`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Persona`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Persona` ;

CREATE TABLE IF NOT EXISTS `Persona` (
  `idPersona` VARCHAR(10) NOT NULL COMMENT '',
  `Nom` VARCHAR(45) NOT NULL COMMENT '',
  `ApPat` VARCHAR(45) NOT NULL COMMENT '',
  `ApMat` VARCHAR(45) NULL COMMENT '',
  `Contrasenia` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idPersona`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `motivo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `motivo` ;

CREATE TABLE IF NOT EXISTS `motivo` (
  `idMotivo` INT(11) NOT NULL COMMENT '',
  `nombre` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`idMotivo`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Alumno`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Alumno` ;

CREATE TABLE IF NOT EXISTS `Alumno` (
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
  PRIMARY KEY (`Boleta`)  COMMENT '',
  CONSTRAINT `fk_Boleta_Solicitante`
    FOREIGN KEY (`Boleta`)
    REFERENCES `Persona` (`idPersona`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

CREATE INDEX `Boleta_Solicitante_idx` ON `Alumno` (`Boleta` ASC)  COMMENT '';

CREATE UNIQUE INDEX `CURP_UNIQUE` ON `Alumno` (`CURP` ASC)  COMMENT '';


-- -----------------------------------------------------
-- Table `Solicitud`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Solicitud` ;

CREATE TABLE IF NOT EXISTS `Solicitud` (
  `idSolicitud` INT(11) NOT NULL COMMENT '',
  `Documento_idDocumento` INT(11) NOT NULL COMMENT '',
  `Motivo_idMotivo` INT(11) NOT NULL COMMENT '',
  `idSolicitante` VARCHAR(10) NOT NULL COMMENT '',
  `idAlumno` VARCHAR(10) NOT NULL COMMENT '',
  `Fecha` DATE NOT NULL COMMENT '',
  `Aceptacion` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idSolicitud`)  COMMENT '',
  CONSTRAINT `fk_Solicitud_Documento1`
    FOREIGN KEY (`Documento_idDocumento`)
    REFERENCES `documento` (`idDocumento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Solicitud_Motivo1`
    FOREIGN KEY (`Motivo_idMotivo`)
    REFERENCES `motivo` (`idMotivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Solicitud_Solicitante`
    FOREIGN KEY (`idSolicitante`)
    REFERENCES `Persona` (`idPersona`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Solicitud_Alumno`
    FOREIGN KEY (`idAlumno`)
    REFERENCES `Alumno` (`Boleta`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE INDEX `fk_Tramite_Documento1_idx` ON `Solicitud` (`Documento_idDocumento` ASC)  COMMENT '';

CREATE INDEX `fk_Tramite_Motivo1_idx` ON `Solicitud` (`Motivo_idMotivo` ASC)  COMMENT '';

CREATE INDEX `fk_Solicitud_Solicitante_idx` ON `Solicitud` (`idSolicitante` ASC)  COMMENT '';

CREATE INDEX `fk_Solicitud_Alumno_idx` ON `Solicitud` (`idAlumno` ASC)  COMMENT '';


-- -----------------------------------------------------
-- Table `EstudianteInscrito`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EstudianteInscrito` ;

CREATE TABLE IF NOT EXISTS `EstudianteInscrito` (
  `Boleta` VARCHAR(10) NOT NULL COMMENT '',
  `Semestre` INT NOT NULL COMMENT '',
  `MateriasInscritas` INT NULL COMMENT '',
  `MateriasReprobadas` INT NULL COMMENT '',
  `CreditosInscritos` FLOAT NULL COMMENT '',
  PRIMARY KEY (`Boleta`)  COMMENT '',
  CONSTRAINT `Est_Estinscrito`
    FOREIGN KEY (`Boleta`)
    REFERENCES `Alumno` (`Boleta`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

CREATE INDEX `Est_Estinscrito_idx` ON `EstudianteInscrito` (`Boleta` ASC)  COMMENT '';


-- -----------------------------------------------------
-- Table `Area`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Area` ;

CREATE TABLE IF NOT EXISTS `Area` (
  `idArea` VARCHAR(10) NOT NULL COMMENT '',
  `NombreArea` VARCHAR(45) NOT NULL COMMENT '',
  `Departamento` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idArea`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TrabajadorArea`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `TrabajadorArea` ;

CREATE TABLE IF NOT EXISTS `TrabajadorArea` (
  `IdTrabajador` VARCHAR(10) NOT NULL COMMENT '',
  `IdArea` VARCHAR(10) NOT NULL COMMENT '',
  PRIMARY KEY (`IdTrabajador`)  COMMENT '',
  CONSTRAINT `fk_Trab_Solicitante`
    FOREIGN KEY (`IdTrabajador`)
    REFERENCES `Persona` (`idPersona`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Trab_Area`
    FOREIGN KEY (`IdArea`)
    REFERENCES `Area` (`idArea`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

CREATE INDEX `Trab_Solicitante_idx` ON `TrabajadorArea` (`IdTrabajador` ASC)  COMMENT '';

CREATE INDEX `Trab_Area_idx` ON `TrabajadorArea` (`IdArea` ASC)  COMMENT '';


-- -----------------------------------------------------
-- Table `EstadoTramite`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EstadoTramite` ;

CREATE TABLE IF NOT EXISTS `EstadoTramite` (
  `idEstadoTramite` INT NOT NULL COMMENT '',
  `Estado` VARCHAR(10) NOT NULL COMMENT '',
  PRIMARY KEY (`idEstadoTramite`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `motivosolicitud`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `motivosolicitud` ;

CREATE TABLE IF NOT EXISTS `motivosolicitud` (
  `idmotivosol` INT NOT NULL COMMENT '',
  `Descripcion` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`idmotivosol`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `solicitanteAjeno`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `solicitanteAjeno` ;

CREATE TABLE IF NOT EXISTS `solicitanteAjeno` (
  `idsolicitanteAjeno` VARCHAR(10) NOT NULL COMMENT '',
  `idmotivo` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idsolicitanteAjeno`)  COMMENT '',
  CONSTRAINT `fk_Solicitante_Motivo`
    FOREIGN KEY (`idmotivo`)
    REFERENCES `motivosolicitud` (`idmotivosol`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Solicitante_SolicitanteA`
    FOREIGN KEY (`idsolicitanteAjeno`)
    REFERENCES `Persona` (`idPersona`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

CREATE INDEX `fk_Solicitante_Motivo_idx` ON `solicitanteAjeno` (`idmotivo` ASC)  COMMENT '';

CREATE INDEX `fk_Solicitante_SolicitanteA_idx` ON `solicitanteAjeno` (`idsolicitanteAjeno` ASC)  COMMENT '';


-- -----------------------------------------------------
-- Table `Tramite`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Tramite` ;

CREATE TABLE IF NOT EXISTS `Tramite` (
  `idTramite` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `idEstado` INT NOT NULL COMMENT '',
  `idAnalista` VARCHAR(10) NOT NULL COMMENT '',
  PRIMARY KEY (`idTramite`, `idEstado`, `idAnalista`)  COMMENT '',
  CONSTRAINT `fk_Tramite_Solicitud`
    FOREIGN KEY (`idTramite`)
    REFERENCES `Solicitud` (`idSolicitud`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Tramite_Estado`
    FOREIGN KEY (`idEstado`)
    REFERENCES `EstadoTramite` (`idEstadoTramite`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Tramite_Analista`
    FOREIGN KEY (`idAnalista`)
    REFERENCES `Persona` (`idPersona`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

CREATE INDEX `fk_Tramite_Estado_idx` ON `Tramite` (`idEstado` ASC)  COMMENT '';

CREATE INDEX `fk_Tramite_Analista_idx` ON `Tramite` (`idAnalista` ASC)  COMMENT '';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
