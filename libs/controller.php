<?php
//require_once LIBRARY.'/Mem_cached.php';
class Controller{
    function __construct() {
        $this->view = new View();
     //   echo "main controller";
    }
public function loadModel($name)
{
    $path = 'models/' . $name .'_model.php';
    if (file_exists($path)){
        require 'models/' . $name . '_model.php';
        $modelName = $name.'_model';
        $this->model = new $modelName();
    }
}


}