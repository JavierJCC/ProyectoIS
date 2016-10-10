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
    $query = "SELECT boleta,contrasena from Alumno where boleta ='" .$boleta. "' and contrasena = '" .$password ."';";
    $alumno = $this->connection->query($query);
    return $alumno? $alumno->fetch_object() : NULL;
  }

  function loginTrabajador($RFC, $password){
    $query = "SELECT Persona.idPersona,TrabajadorArea.RFC from Persona,TrabajadorArea where Persona.idPersona = TrabajadorArea.idPersona and TrabajadorArea.RFC = '" .$RFC. "' and Persona.contrasena = '" . $password . "';";
    $persona = $this->connection->query($query);
    return $persona ? $persona->fetch_object() : NULL;
  }
  
} 