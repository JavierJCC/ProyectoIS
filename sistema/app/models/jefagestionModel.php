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
        $query = 'SELECT p.idpersona, p.nom, p.ApPat, p.ApMat, t.RFC, t.email, a.NombreArea
                  FROM persona p, trabajadorarea t, area a 
                  WHERE p.idpersona = t.idtrabajador and t.idarea = a.idarea';
        $consulta = $this->connection->query($query);
      //  echo($this->connection->error);
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
    }
    
    function desactivar($idPersona){
        $query = "UPDATE trabajadorarea 
                  set status = 0 
                  WHERE idTrabajador = '{$idPersona}'";
        $desactivar = $this->connection->query($query);
    }
} 
