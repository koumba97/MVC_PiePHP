<?php 
namespace Controller;
use \Core\Controller;

class userController{

    public function run(){
        echo __CLASS__ . " [OK]" . "<br>" ;
    }

    public function addAction(){
        echo "hey ! voici le contenu de la méthode addAction" . PHP_EOL;
        
    }

    public function indexAction(){
        echo "manque de parametre";
        
    }


}