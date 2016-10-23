Delimiter #
create procedure altaTramite(in p_idDocumento int ,in p_idMotivo int ,in p_idAlumno varchar(10))
  begin 
    DECLARE p_idEstado int;
    insert into tramite(idEstado,idAnalista) values(1,"12345");
    select idTramite into p_idEstado from tramite ORDER BY idTramite DESC LIMIT 1;
    insert into solicitud(idSolicitud,Documento_idDocumento,Motivo_idMotivo,idAlumno,Fecha,Aceptacion) values(p_idEstado,p_idDocumento,p_idMotivo,p_idAlumno,now(),0);
  end #
delimiter ;

Delimiter #
create procedure altacuenta(in noEmp varchar(10), in nombre varchar(45), in apPaterno varchar(45), in apMaterno varchar(45), in rfcc varchar(15),in correo varchar(50),in idareaa varchar(10))
  begin 
    insert into persona(idPersona,nom,apPat,apMat) values(noEmp,nombre,apPaterno,apMaterno);
    insert into trabajadorarea(idTrabajador,idArea,RFC,email) values(noEmp,idareaa,rfcc,correo);
  end #
delimiter ;


ALTER DATABASE ingenieria CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE tramite MODIFY idTramite int CHARACTER SET utf8;

ALTER TABLE alumno
ALTER carrera SET DEFAULT 'Ingenieria en sistemas computacionales';

ALTER TABLE trabajadorArea
ALTER idArea SET DEFAULT 'A01';

create table solicitud(
  idSolicitud int not null, 
  Documento_idDocumento int not null,
  Motivo_idMotivo int not null,
  idSolicitante varchar(10), 
  idAlumno varchar(10), 
  fecha Date not null,
  Aceptacion int(1)
);

INSERT INTO `alumno` VALUES ('2014630002','CACJ950812HDFKNO03','A15','Ingeniería en sistemas computacionales','09',NULL,58.5,8.5,'55555555','555555555','javisever2@gmail.com',0);
call altaTramite(1,1,"2014630002");


CREATE PROCEDURE actTramite (IN p_idSolicitud INT(11), IN p_idAlumno varchar(10))
BEGIN
	UPDATE solicitud SET Aceptacion=1 WHERE idSolicitud=p_idSolicitud and idAlumno=p_idAlumno;
END
