<?php 

class Controller
{
  protected function model($model)
  {
    if(file_exists('../app/models/'.$model . '.php')){ // existe el modelo?
      require_once '../app/models/' . $model . '.php';
      return new $model(); // requerimos el modelo
    }else{
      echo 'MODELO NO ENCONTRADO, VERIFICA EL NOMBRE.';
    }
  }
  protected function view($view, $data = []){ //si no queremos pasar datos inicializamos un array vacio
    if(file_exists('../app/views/'. $view . '.php')){// existe la vista?
      require_once '../app/views/'. $view . '.php';
    } 
  }
}