<?php 
namespace Core;

class Core{

    public function run(){
        echo __CLASS__ . " [OK]" . "<br>" ;


        $URL= $_SERVER['REQUEST_URI'];


        // if(Router::get($URL)) {
        //     echo "yes";
        // }
  
    }
}


