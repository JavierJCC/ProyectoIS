<?php 

class Estudiante_Egresado extends Controller
{
  public function Solicitar_Tramite(){
    $EE_modelo = $this->model('estudianteEgresadoModel');
    $documentos = $EE_modelo->select_all_documentos();
    $motivos = $EE_modelo->select_all_motivos();
    $this->view('estudianteEgresado/solicitar_tramite',['documentos'=> $documentos, 'motivos'=> $motivos ]);
  }
}