<?php 
session_start();

class Index extends Controller
{
  private $usuarioModel;
  function __construct(){
    $this->usuarioModel = $this->model('usuarioModel');
  }
  function login(){
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $usuario = $this->usuarioModel->login($request->boleta,$request->password);
    if($usuario){
      $data = array('Valida' => 1);
      $_SESSION["usuario"]=$usuario;
      header('Content-Type: application/json');
      $this->response = json_encode($data);
    }else{
        //header('HTTP/1.1 500 Internal Server Booboo');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
    }
  }

  function loginT(){
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $usuario = $this->usuarioModel->loginTrabajador($request->noEmpleado,$request->password);
   if($usuario){
      $data = array('Valida' => 1);
      $_SESSION["usuario"]=$usuario;
      header('Content-Type: application/json');
      $this->response = json_encode($data);
    }else{
        //header('HTTP/1.1 500 Internal Server Booboo');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
    }
  
  }
  function logout(){
    session_destroy();
    header("Location: ". "/Proyecto_IS/ProyectoSemestreIS/sistema/public/");
  }
}