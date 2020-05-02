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

        if(isset($_SESSION['id'])){

            $movie = new Model\historiqueModel();
            $movie->read();
        }
        
        $this->render("home");
    }

    public function showAction(){

        $movie = new Model\movieModel();
        $movie->last_movie();

        $historique = new Model\historiqueModel();
        $historique->read_all();

        $this->render("historique");
    }

    public function genresAction(){
        $genre = new Model\genreModel();
        $genre->read_all();

        $result= $genre->read_all();
    
        $this->render("genres", $result);
    }
}