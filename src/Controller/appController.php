<?php

use \Core\Controller;

class appController extends Controller{

    public function run(){
        echo __CLASS__ . " [OK]" . "<br>" ;
    }
    public function indexAction(){

        $this->render("home");


        // if (isset($_POST['email'])){

        //     echo "bonjour ".$_POST['email'] . " votre id est "; //$_SESSION['id'];
        //     echo "<a href='logout'>déconnection</a>";
        // }
        // else{
        //     echo "bonjour, connecte-toi <a href='../../../../MVC_PiePHP/login'>ici</a>";
        // }
    }

}