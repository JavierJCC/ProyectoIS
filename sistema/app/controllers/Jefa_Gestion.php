<?php

class Jefa_Gestion extends Controller{
    private $modelo_jefa;
    function __construct(){
        session_start();
        if(!$_SESSION["usuario"]){
            header("Location: ". "/Proyecto_IS/ProyectoSemestreIS/sistema/public/");
        }
        $this->modelo_jefa = $this->model('jefagestionModel');
    } 

    public function gestionar_cuentas(){
        $usuarios = $this->modelo_jefa->gestionar();
        $area = $this->modelo_jefa->get_area();
        $this->view('jefaGestion/gestionar_cuentas',['usuarios'=>$usuarios,"areas"=>$area]);
    }

    public function registrar_cuentas(){
        $this->modelo_jefa->registrar($_POST["no_empleado"],$_POST["nombre"],$_POST["apPaterno"],$_POST["apMaterno"],$_POST["rfc"],$_POST["email"],$_POST["area"]);
    }
    //ReCIBE INFORMACION DE BD Y DESPLIEGA EN MODAL
    public function actualizar_cuentas($idPersona){
        $consulta_actualiza = $this->modelo_jefa->consulta_actualizar($idPersona);
        $persona = $consulta_actualiza->fetch_object();
        die(json_encode(array('idPersona'=>$persona->idPersona,'nom'=>$persona->nom,'apPat'=>$persona->apPat,'apMat'=>$persona->apMat,'RFC'=>$persona->RFC,'email'=>$persona->email,'nombreArea'=>$persona->nombreArea)));
    }
    //ACTUALIZA INFORMACION1
    public function actualizaCuenta(){
        $this->modelo_jefa->update_empleado($_POST["actualizaEmpleado"],$_POST["nombre1"],$_POST["apPaterno1"],$_POST["apMaterno1"],$_POST["rfc1"],$_POST["email1"],$_POST["area1"]);
    }

    public function desactivar_cuentas($noEmp){
        $this->modelo_jefa->desactivar($noEmp);
    }
    
    public function visualizar_bitacora(){
    $EE_modelo = $this->model('jefagestionModel');
    $motivos = $EE_modelo->bitacora();
    $motivos2 = $EE_modelo->bitacora();
    $this->view('jefaGestion/visualizar_bitacora', ['motivos'=> $motivos, 'motivos2'=> $motivos2]);
    }
    
    
    public function reportes_estadisticos(){
		//$EE_modelo = $this->model('jefagestionModel');
        $this->view('jefaGestion/reportes');
    }
	
	public function reportes_documentos(){
		//$EE_modelo = $this->model('jefagestionModel');
        $this->view('jefaGestion/reportedocumento');
    }
    
    public function memorandums(){
        $memorandums = $this->model('DEModel')->get_memorandum();
        $this->view('jefaGestion/memorandums',['memorandums'=>$memorandums]);
    }

    //Angular regresa numero de memorandums sin leer
    public function get_no_memorandums(){
        $numero = $this->modelo_jefa->get_no_memorandums();
        die(json_encode(array('numero' => $numero->numero)));
    }

    public function update_memorandum(){
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $this->modelo_jefa->update_memorandum($request->id);    

    }
    
}

