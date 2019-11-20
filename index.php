<?php
    spl_autoload_register(function($class_name) {
        require_once './core/classes/'.$class_name.'.php';
    });
    
    require_once('Routes.php');
  
   

?>