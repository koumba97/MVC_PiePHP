<?php 
session_start();

use \Core\Controller;
use \Core\Request;

class movieController extends Controller{

    public function showAction() {

        $url_params = explode(DIRECTORY_SEPARATOR, $_SERVER['REQUEST_URI']);

        if(substr($url_params[2], 0, 5)=="movie"){

            $id_movie=substr($url_params[2], 5);
        }


        $movie = new Model\movieModel();
        $movie->read($id_movie);
        $this->render("details");
    }

    public function updateAction(){
        $id_movie = $_POST['id_movie'];
        $title = $_POST['title'];
        $resum = $_POST['resum'];
        $genre = $_POST['genre'];

        $movie = new Model\movieModel();
        $movie->update($id_movie, $title, $resum, $genre);
    }
}
?>