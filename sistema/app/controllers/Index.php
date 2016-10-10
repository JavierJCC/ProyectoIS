<?php 

class Index extends Controller
{
  private $boleta;
  private $password;
  private $usuarioModel;
  function __construct(){
    $this->usuarioModel = $this->model('usuarioModel');
  }
  function login(){
    header('Content-Type: application/json');
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $this->boleta = $request->boleta;
    $this->password = $request->password;
    $data = array('a'=>'hola');
    echo json_encode($data);
  }
}