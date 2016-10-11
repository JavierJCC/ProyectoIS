<?php

class estudianteEgresadoModel
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

  function select_all_documentos(){
    $query = 'SELECT * FROM DOCUMENTO';
    $documentos = $this->connection->query($query);
    return $documentos ? $documentos : array();
  }
  function select_all_motivos(){
    $query = 'SELECT * FROM MOTIVO';
    $motivos = $this->connection->query($query);
    return $motivos ? $motivos : array();
  }

  function insert_peticiones($peticiones,$solicitante){
    foreach($peticiones as $peticion){
      $query = 'Insert into solicitud(documento_idDocumento,motivo_idMotivo,idAlumno,fecha,aceptacion) values('.$peticion->idDocumento.','.$peticion->idMotivo.','.$solicitante.',now(),0)';
      if($this->connection->query($query) === TRUE){
        echo "Solicitudes guardadas";
      }else{
         echo  $this->connection->error;
      }
    }
  }

} 
