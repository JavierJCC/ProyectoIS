<?php 

class Estudiante_Egresado extends Controller
{
  private $EE_modelo;
  function __construct(){
    session_start();
    if(!$_SESSION["usuario"]){
      header("Location: ". "/Proyecto_IS/ProyectoSemestreIS/sistema/public/");
    }
    $this->EE_modelo = $this->model('estudianteEgresadoModel');
  }
  public function Solicitar_Tramite(){
    $documentos = $this->EE_modelo->select_all_documentos();
    $motivos = $this->EE_modelo->select_all_motivos();
    $this->view('estudianteEgresado/solicitar_tramite',['documentos'=> $documentos, 'motivos'=> $motivos ]);
  }
  public function Enviar_Peticion(){
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $this->EE_modelo->insert_peticiones($request,$_SESSION["usuario"]->idPersona);
  }
  
  public function	Estado_Tramite(){
    $EE_modelo = $this->model('estudianteEgresadoModel');
    $motivos = $EE_modelo->select_all_estados();
    $motivos2 = $EE_modelo->select_all_estados();
      $this->view('estudianteEgresado/estado_tramite', ['motivos'=> $motivos,'motivos2'=> $motivos2 ]);
  }
}
