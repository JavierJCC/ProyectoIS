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
    print_r($request);
	$this->EE_modelo->acep_solicitudes($request->idSolicitud, $request->idAlumno);
    //$this->EE_modelo->insert_peticiones($request,$_SESSION["usuario"]->boleta);
  }
	
  public function Estado_peticion(){
	  $EE_modelo = $this->model('analistaModel');
    $documentos = $this->EE_modelo->get_documentos();
	  $this->view('analista/actualizar_estado', ['documentos'=>$documentos]);
  }
  public function Actualizar_Estado(){
    $EE_modelo = $this->model('analistaModel');
    $resultado = $EE_modelo->update_estado($_POST["id"],$_POST["estado"]);
    echo $resultado;
  }

  // solicitar documento
  public function solicitar_documento(){
    $documentos = $this->model('estudianteEgresadoModel')->select_all_documentos();
    $motivos = $this->model('estudianteEgresadoModel')->select_all_motivos();
    $this->view('analista/peticion_documento',['documentos'=> $documentos, 'motivos'=> $motivos ]);

  }
  public function get_boleta(){
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $tipo = $this->model('estudianteEgresadoModel')->get_tipo($request->boleta);
    die(json_encode(array('tipo'=>$tipo->egresado)));
  }
  public function update_alumno_email(){
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $this->model('estudianteEgresadoModel')->update_email($request->email, $request->boleta);
  }
  public function Enviar_Peticion_documento(){
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $this->model('estudianteEgresadoModel')->insert_peticiones($request->documentos, $request->boleta);
  }
}
