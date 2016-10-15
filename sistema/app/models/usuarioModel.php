<?php
class usuarioModel{
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
  
  function login($boleta,$password){
    $query = "SELECT persona.idPersona from persona,alumno where persona.idPersona = alumno.boleta  and persona.idPersona ='" .$boleta. "' and persona.contrasena = '" .$password ."';";
    $alumno = $this->connection->query($query);
    return $alumno? $alumno->fetch_object() : NULL;
  }

  function loginTrabajador($noEmp, $password){
    $query = "SELECT Persona.nom, Persona.apPat, Persona.apMat,TrabajadorArea.IdTrabajador from Persona,TrabajadorArea where Persona.idPersona = TrabajadorArea.IdTrabajador and TrabajadorArea.idTrabajador = '" .$noEmp. "' and Persona.contrasena = '" . $password . "';";
    $persona = $this->connection->query($query);
    printf($this->connection->error);
    return $persona ? $persona->fetch_object() : NULL;
  }
  
} 