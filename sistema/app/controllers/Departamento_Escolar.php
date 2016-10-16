<?php 
class Departamento_Escolar extends Controller
{
  private $model;
  function __construct(){
    session_start();
    if(!$_SESSION["usuario"]){
      header("Location: ". "/Proyecto_IS/ProyectoSemestreIS/sistema/public/Home/IndexTrabajador");
    }
  }
  function Index(){
    $this->view('departamento_escolar/memorandum');
  }
}