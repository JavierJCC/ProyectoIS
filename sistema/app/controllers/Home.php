<?php 

class Home extends Controller
{
  public function index($param = '')
  {
    $this->view('index');
  }
  public function test()
  {
    echo 'test';
  }
}