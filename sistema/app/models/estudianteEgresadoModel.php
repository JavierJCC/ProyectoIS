<?php

class estudianteEgresadoModel
{
  private $database;
  private $username;
  private $password;
  private $db;
  function __construct(){
    $username="root";
    $password="postcardfrom1952";
    $db="ingenieria";
    $connection = mysql_connect("127.0.0.1",$username,$password);
    if($connection){
      $database =mysql_select_db($db, $connection);
      if($database){
      // conexión exitosa
      }
    }
  }
  function select_all_documentos(){
    $query = 'SELECT * FROM DOCUMENTO';
    $documentos = mysql_query($query);
    return $documentos; 
  }
  function select_all_motivos(){
    $query = 'SELECT * FROM MOTIVO';
    $motivos = mysql_query($query);
    return $motivos ? $motivos : null;
  }
  
} 