<?php 
session_start();
class Estudiante_Egresado extends Controller
{
  function __construct(){
    if(!$_SESSION["usuario"]){
      header("Location: ". "/Proyecto_IS/ProyectoSemestreIS/sistema/public/");
    }
  }
  public function Solicitar_Tramite(){
    $EE_modelo = $this->model('estudianteEgresadoModel');
    $documentos = $EE_modelo->select_all_documentos();
    $motivos = $EE_modelo->select_all_motivos();
    print_r($_SESSION["usuario"]);
    $this->view('estudianteEgresado/solicitar_tramite',['documentos'=> $documentos, 'motivos'=> $motivos ]);
  }
}