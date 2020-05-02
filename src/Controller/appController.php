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
        $movie = new Model\movieModel();
        $movie->read_all();
        
        $this->render("home");
    }

    public function genresAction(){
        $genre = new Model\genreModel();
        $genre->read_all();

        $result= $genre->read_all();
    
        $this->render("genres", $result);
    }
}