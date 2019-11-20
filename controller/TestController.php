<?php
require_once(__DIR__.'/../core/BaseController.php');

class Test extends BaseController{
	function __construct(){
		echo 'CLASS CREATED '."<br />";
	}

	function hello_get(...$args){
        echo "Hello, World! from GET";
	}

  function hello_post(...$args){
    echo "Hello, World! from POST";
  }
}

?>
