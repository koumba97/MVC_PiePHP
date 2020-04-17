<?php
class appController{

    public function run(){
        echo __CLASS__ . " [OK]" . "<br>" ;
    }
    public function indexAction(){
        echo "coucou ! voici le contenu de la méthode indexAction";
    }

}