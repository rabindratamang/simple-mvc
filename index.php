<?php

    function getArgumentStart($uri){
        foreach ($uri as $key => $value){
            if($value == 'index.php'){
                if($key == count($uri) - 1 ) return -1;
                return $key+1;
            }
        }
    }
    // converting url to array
    $parameters = explode('/', $uri['path']);

    // get the start where controllerr starts
    $start = getArgumentStart($parameters);

    // now we will just do a simple error handling

    if($start != -1){

    $controller_name = $parameters[$start];

    $function_name = $parameters[$start+1];

    // now we can pack the rest of the values as arguments.

    // for that we will create a simple array

    $args = array();

    // setting the correct index
    $start+=2;

    for(;$start<count($parameters);$start++){
    array_push($args, $parameters[$start]);
    }

    call_user_func_array(array(new $controller_name, $function_name), $args); // <===

    }else{

      echo "404 not found";
    }
?>
