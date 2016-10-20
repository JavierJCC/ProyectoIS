<?php

class Jefa_Gestion extends Controller{
    private $model;
    function _construct(){
        session_start();
        if(!$_SESSION["usuario"]){
            header("Location: ". "/Proyecto_IS/ProyectoSemestreIS/sistema/public/");
        }
    } 

    public function gestionar_cuentas(){
        $this->view('jefaGestion/gestionar_cuentas');
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
    
    
}

