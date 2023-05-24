<?php 
/*
  * Base Controller
  * Loads the model and views
*/

class Controller{
  // Load model
  public function model($model){
    // Require model file
    require_once '../app/models/' . $model . '.php';

    // Instantiate model
    return new $model(); 
  }

  // Load View 
  public function view($view, $data = []){
    // Check for view file
    if(file_exists('../app/views/' . $view . '.php')){
      require_once '../app/view/' . $view / '.php';
    }else{
      // View DOes not exist
      die('View does not exist');
    }
  }
}
