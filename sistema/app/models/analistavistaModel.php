<?php

class analistavistaModel
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

  function select_all_solicitudes(){
    $query = "select solicitud.idSolicitud, solicitud.idAlumno as 'Boleta',  CONCAT(persona.ApPat, concat(' ',concat(persona.ApMat, concat(' ',Nom)))) as 'Nombre', 
		documento.nombre as 'Tipo de Documento', motivo.nombre as 'Motivo', solicitud.Fecha from solicitud 
		inner join documento on solicitud.Documento_idDocumento=documento.idDocumento 
		inner join motivo on solicitud.Motivo_idMotivo=motivo.idMotivo
		inner join persona on solicitud.idAlumno=persona.idPersona 
		where Aceptacion=3;";
	$tildes = $this->connection->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
    $solicitudes = $this->connection->query($query);
	
    print_r($solicitudes);
    return $solicitudes ? $solicitudes : array();
  }
  
 
} 