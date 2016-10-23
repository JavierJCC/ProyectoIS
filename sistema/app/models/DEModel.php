<?php 

class DEModel 
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
  function insert_memorandum($nombreArchivo){
    $query = "call insert_memorandum('{$nombreArchivo}');";
    if($this->connection->query($query))
      print "registrado";
    else
      print $this->connection->error;
  }

  function get_memorandum(){
    $query = "Select * from memorandum";
    $memorandums = $this->connection->query($query);
    
    return $memorandums ? $memorandums : array();
  }
}
