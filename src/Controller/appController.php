<?php
class appController{

    public function run(){
        echo __CLASS__ . " [OK]" . "<br>" ;
    }
    public function indexAction(){
        if (isset($_POST['email'])){
            echo "bonjour ".$_POST['email'];
        }
        else{
            echo "bonjour, connecte-toi <a href='login'>ici</a>";
        }
    }

}