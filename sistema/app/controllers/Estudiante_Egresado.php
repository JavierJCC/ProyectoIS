<?php 

class Estudiante_Egresado extends Controller
{
  public function Solicitar_Tramite(){
    $EE_modelo = $this->model('estudianteEgresadoModel');
    $documentos = $EE_modelo->select_all_documentos();
    while($row = mysql_fetch_array($documentos))
  {
    $name = $row["nombre"];
    echo "Name: " . $name; 

  }
    $motivos = $EE_modelo->select_all_motivos();
    $this->view('estudianteEgresado/solicitar_tramite',['documentos'=> $documentos, 'motivos'=> $motivos ]);
  }
}