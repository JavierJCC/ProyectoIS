<?php

class jefagestionModel
{
  private $username;
  private $password;
  private $db;
  private $connection;
  function __construct(){
    $this->username="ingenieria2016";
    $this->password="ingenieria";
    $this->db="ingenieria";
    $this->connection = new mysqli("127.0.0.1",$this->username,$this->password,$this->db);
    if(mysqli_connect_errno()){
      echo mysqli_connect_error();
    }
}

    function bitacora(){
        $query = 'SELECT sol.idSolicitud, sol.fecha, person.nom, person.apPat, person.apMat, sol.hora, mot.nombre, sol.folio
                  FROM solicitud AS sol, documento AS doc, persona AS person, motivo AS mot
                  WHERE sol.Documento_idDocumento=doc.idDocumento AND sol.idSolicitante=person.idPersona AND sol.Motivo_idMotivo=mot.idMotivo';
        $motivos = $this->connection->query($query);
        return $motivos ? $motivos : array();
    }

    function get_no_memorandums(){
        $query = "select count(*) as numero from memorandum where descargado=0";
        $numero = $this->connection->query($query);
        return $numero ? $numero->fetch_object() : 0;
    }

    function update_memorandum($id){
        $query = "update memorandum set descargado=1 where idMemorandum = {$id}";
        if($this->connection->query($query))
            echo "actualizado";
        else 
            echo $this->connection->error;
    }
    function gestionar(){
        $query = 'SELECT p.idpersona, p.nom, p.ApPat, p.ApMat, t.rfc, t.email, a.NombreArea
                  FROM persona p, trabajadorarea t, area a 
                  WHERE p.idpersona = t.idtrabajador and t.idarea = a.idarea';
        $consulta = $this->connection->query($query);
        echo($this->connection->error);
        return $consulta ? $consulta : array();
    }

    function get_area(){
        $query = 'SELECT idArea,nombreArea from area';
        $area = $this->connection->query($query);
        return $area ? $area : array();
    }

    function registrar($noEmp,$nombre,$apPaterno,$apMaterno,$rfcc,$correo,$idareaa){
        $query = "call altacuenta('{$noEmp}','{$nombre}','{$apPaterno}','{$apMaterno}','{$rfcc}','{$correo}','{$idareaa}')";
        $registro = $this->connection->query($query);
        echo $this->connection->error;
    }
    
    function desactivar($idPersona){
        $query = "UPDATE trabajadorarea 
                  set status = 0 
                  WHERE idTrabajador = '{$idPersona}'";
        $desactivar = $this->connection->query($query);
    }

    function consulta_actualizar($idPersona){
        $query = "SELECT p.idPersona,p.nom,p.apPat,p.apMat,t.RFC,t.email,a.nombreArea 
                  FROM persona p, trabajadorarea t, area a
                  WHERE p.idPersona = t.idTrabajador
                  AND t.idArea = a.idArea
                  AND p.idPersona = '{$idPersona}'";
        $consulta_actualizar = $this->connection->query($query);
        return $consulta_actualizar ? $consulta_actualizar : array();      
    }

    function update_empleado($noEmp,$nombre,$apPaterno,$apMaterno,$rfcc,$correo,$idareaa){
        $query = "call update_cuenta('{$noEmp}','{$nombre}','{$apPaterno}','{$apMaterno}','{$rfcc}','{$correo}','{$idareaa}')";
        $update = $this->connection->query($query);
        echo $this->connection->error;
    }

    function consultar_documento(){
        $query = 'SELECT idDocumento, nombre from documento';
        $consultar_documento = $this->connection->query($query);
        return $consultar_documento ? $consultar_documento : array();
    }

    function consultar_tramite(){
        $query = 'SELECT idEstado, estado from estadoTramite';
        $consultar_tramite = $this->connection->query($query);
        return $consultar_tramite ? $consultar_tramite : array();
    }

    function consultar_motivo(){
        $query = 'SELECT idMotivo, nombre from motivo';
        $consultar_motivo = $this->connection->query($query);
        return $consultar_motivo ? $consultar_motivo : array();
    }

    function consultar_alumno($idPersona){
        $query = "SELECT nom, apPat, apMat from persona,alumno where persona.idPersona = alumno.boleta and persona.idPersona = '{$idPersona}'";
        $consultar_alumno = $this->connection->query($query);
        return $consultar_alumno ? $consultar_alumno : array();

    }

} 
