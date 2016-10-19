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
      $query = 'Call altaTramite('.$peticion->idDocumento.','.$peticion->idMotivo.','.$solicitante.');';
      if($this->connection->query($query) === TRUE){
        echo "Solicitudes guardadas";
      }else{
         echo  $this->connection->error;
      }
    }
  }

  function select_all_estados(){
    $pao=$_SESSION["usuario"]->idPersona;
    $query = 'SELECT doc.nombre, sol.Fecha, mot.nombre, est.Estado
    FROM documento AS doc, solicitud AS sol, motivo AS mot, tramite AS tra, estadotramite AS est
    WHERE sol.Documento_idDocumento = doc.idDocumento AND sol.Motivo_idMotivo = mot.idMotivo AND tra.idEstado= est.idEstado 
    AND idSolicitud=tra.idTramite AND sol.idSolicitante='.$pao.'';
    $motivos = $this->connection->query($query);
    return $motivos ? $motivos : array();
  }
  
} 
