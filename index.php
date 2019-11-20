<?php
    spl_autoload_register(function($class_name) {
        if(file_exists('./core/classes/'.$class_name.'.php')){
            require_once './core/classes/'.$class_name.'.php';
        } else if('./controllers/'.$class_name.'.php'){
            require_once './controllers/'.$class_name.'.php';
        }
    });


    require_once('Routes.php');
  
   

?>