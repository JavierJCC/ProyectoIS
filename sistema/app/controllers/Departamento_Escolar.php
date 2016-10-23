<?php 
class Departamento_Escolar extends Controller
{
  private $modelo;
  function __construct(){
    session_start();
    $this->modelo = $this->model('DEModel'); 
    if(!$_SESSION["usuario"]){
      header("Location: ". "/Proyecto_IS/ProyectoSemestreIS/sistema/public/Home/IndexTrabajador");
    }
  }
  function Index(){
    $this->view('departamento_escolar/memorandum');
  }

  function agregar_memorandum(){
    $archivo = $_FILES["file"]; //obtengo el archivo
    move_uploaded_file($archivo['tmp_name'],'departamento_escolar/memorandums/'.$archivo['name']); //subo el archivo;
    $this->modelo->insert_memorandum($archivo['name']);
  }
}