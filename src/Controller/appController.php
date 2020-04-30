<?php
session_start();
use \Core\Controller;


class appController extends Controller{

    public function run(){
        echo __CLASS__ . " [OK]" . "<br>" ;
    }
    public function indexAction(){
        $params="";
        //$user = new Model\userModel('movie', $params);
        $user = new Model\movieModel();
        $user->read_all();
        $this->render("home");
    }

}