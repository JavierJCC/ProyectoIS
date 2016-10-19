<?php

class analistaModel
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
		where Aceptacion=0;";
	$tildes = $this->connection->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
    $solicitudes = $this->connection->query($query);
	
    print_r($solicitudes);
    return $solicitudes ? $solicitudes : array();
  }
  
  function select_solicitudes_aceptadas(){
    $sql = "select solicitud.idSolicitud, solicitud.idAlumno as 'Boleta',  CONCAT(persona.ApPat, concat(' ',concat(persona.ApMat, concat(' ',Nom)))) as 'Nombre', 
		documento.nombre as 'Tipo de Documento', motivo.nombre as 'Motivo', solicitud.Fecha from solicitud 
		inner join documento on solicitud.Documento_idDocumento=documento.idDocumento 
		inner join motivo on solicitud.Motivo_idMotivo=motivo.idMotivo
		inner join persona on solicitud.idAlumno=persona.idPersona 
		where Aceptacion=1;";
	$tildes = $this->connection->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
    $solac = $this->connection->query($sql);
	
    print_r($solac);
    return $solac ? $solac : array();
  }
  
  function select_solicitudes_rechazadas(){
    $sql = "select solicitud.idSolicitud, solicitud.idAlumno as 'Boleta',  CONCAT(persona.ApPat, concat(' ',concat(persona.ApMat, concat(' ',Nom)))) as 'Nombre', 
		documento.nombre as 'Tipo de Documento', motivo.nombre as 'Motivo', solicitud.Fecha from solicitud 
		inner join documento on solicitud.Documento_idDocumento=documento.idDocumento 
		inner join motivo on solicitud.Motivo_idMotivo=motivo.idMotivo
		inner join persona on solicitud.idAlumno=persona.idPersona 
		where Aceptacion=2;";
	$tildes = $this->connection->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
    $solac = $this->connection->query($sql);
	
    print_r($solac);
    return $solac ? $solac : array();
  }
  	
  function acep_solicitudes($idSolicitud, $Boleta){
	  $query = 'Call actTramite('.$idSolicitud.','.$Boleta.');';
	  print_r($query);
      if($this->connection->query($query) === TRUE){
        echo "Solicitud Aceptada";
      }else{
         echo  $this->connection->error;
      }
  }
  
  function rec_solicitudes($idSolicitud, $idAlumno){
	  $query = "UPDATE solicitud SET Aceptacion=2 WHERE idSolicitud='$idSolicitud' and idAlumno='$idAlumno';";
      if($this->connection->query($query) === TRUE){
        echo "Solicitud Rechazada";
      }else{
         echo  $this->connection->error;
      }
  }

  function get_documentos(){
    $query = "SELECT solicitud.idSolicitud, documento.nombre, solicitud.idAlumno, tramite.idTramite, tramite.idEstado from solicitud,documento,tramite where tramite.idTramite = solicitud.idSolicitud and solicitud.Documento_idDocumento = documento.idDocumento;";
    echo $this->connection->error;
    echo "hola";
    $documentos = $this->connection->query($query);
    return $documentos ? $documentos : array();
  }
  function update_estado($idTramite, $estado){
    
    $query = "UPDATE tramite set idEstado={$estado} where idTramite={$idTramite}";
    $estado_anterior = analistaModel::get_estado($idTramite);
    if($estado > $estado_anterior->idEstado){
      if($this->connection->query($query) === TRUE){
        return "exito";
      }else{
         echo  $this->connection->error;
      }
    }
    else 
      return "error";
  }
  function get_estado($idTramite){
      $query = "Select idEstado from tramite where idTramite={$idTramite}";
      return $this->connection->query($query)->fetch_object();
  }  
  
} 
