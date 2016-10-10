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
    if($usuario->boleta){
      $data = array('Valida' => 1);
      $_SESSION["usuario"]=$usuario;
    }
    header('Content-Type: application/json');
    echo json_encode($data);
  }

  function loginT(){
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $usuario = $this->usuarioModel->loginTrabajador($request->RFC,$request->password);
    if($usuario->RFC){
      $data = array('Valida' => 1);
      $_SESSION["usuario"]=$usuario;
    }
    header('Content-Type: application/json');
    echo json_encode($data);
  }
}