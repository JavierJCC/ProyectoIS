<?php 

class Analista_solicitudes extends Controller
{
  public function Visualizar_Tramite(){
    $EE_modelo = $this->model('analistavistaModel');
    $solicitudes = $EE_modelo->select_all_solicitudes();
    //$motivos = $EE_modelo->select_all_motivos();
    $this->view('analista/analista_solicitudes',['solicitudes'=> $solicitudes]);
  }
}