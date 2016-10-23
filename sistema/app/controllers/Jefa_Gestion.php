<?php

class Jefa_Gestion extends Controller{
    private $modelo_jefa;
    function __construct(){
        session_start();
        if(!$_SESSION["usuario"]){
            header("Location: ". "/Proyecto_IS/ProyectoSemestreIS/sistema/public/");
        }
        $modelo_jefa = $this->model('jefagestionModel');
    } 

    public function gestionar_cuentas(){
        $this->view('jefaGestion/gestionar_cuentas');
        $this->modelo_jefa->gestionar();
        $usuarios = $this->modelo_jefa->gestionar();
        print_r($usuarios);
        echo "Hola";
    }

    public function registrar_cuentas(){
        $this->view('jefaGestion/agregar_cuentas');
    }

    public function actualizar_cuentas(){
        $this->view('jefaGestion/actualizar_cuentas');
    }

    public function desactivar_cuentas(){
        $this->view('');
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
    
    
}

