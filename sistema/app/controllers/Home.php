<?php 

class Home extends Controller
{
  public function index($param = '')
  {
    $modelo = $this->model('Probando');
    $modelo->parametro = 'hey modelo';
    $this->view('index',['parametro' => $modelo->parametro]);
  }
  public function test()
  {
    echo 'test';
  }
}