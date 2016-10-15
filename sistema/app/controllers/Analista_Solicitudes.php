<?php 

class Analista_solicitudes extends Controller
{
  private $EE_modelo;
  function __construct(){
    session_start();
    if(!$_SESSION["usuario"]){
      header("Location: ". "/Proyecto_IS/ProyectoSemestreIS/sistema/public/"); 
    }
    $this->EE_modelo = $this->model('analistaModel');
  }
  public function Visualizar_Tramite(){
    $EE_modelo = $this->model('analistaModel');
    $solicitudes = $EE_modelo->select_all_solicitudes();
    $this->view('analista/analista_solicitudes',['solicitudes'=> $solicitudes]);
  }
  
  public function Tramites_Aceptados(){
    $EE_modelo = $this->model('analistaModel');
    $solac = $EE_modelo->select_solicitudes_aceptadas();
    $this->view('analista/analista_solicitudes_aceptadas',['solac'=> $solac]);
  }
  
  public function Tramites_Rechazados(){
    $EE_modelo = $this->model('analistaModel');
    $solac = $EE_modelo->select_solicitudes_rechazadas();
    $this->view('analista/analista_solicitudes_rechazadas',['solac'=> $solac]);
  }
  
  public function Peticion_Acep(){
	$EE_modelo = $this->model('analistaModel');
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
	$this->EE_modelo->acep_solicitudes($idSolicitud, $idAlumno);
    //$this->EE_modelo->insert_peticiones($request,$_SESSION["usuario"]->boleta);
  }
	
  public function Estado_peticion(){
	  $EE_modelo = $this->model('analistaModel');
	  $this->view('analista/actualizar_estado');
  }
}
