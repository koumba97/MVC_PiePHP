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

    public function deleteAction(){

        $url_params = explode(DIRECTORY_SEPARATOR, $_SERVER['REQUEST_URI']);
        $id_movie_delete=substr($url_params[2], 11);

        $movie = new Model\movieModel();
        $movie->delete($id_movie_delete);
    }

    public function addAction(){

        echo "yesss";
        echo $title = $_POST['title'];
        echo $genre = $_POST['genre'];
        echo $resum = $_POST['resum'];
        echo $affiche = $_POST['affiche'];
        echo $bg = $_POST['background'];

        $movie = new Model\movieModel();
        $movie->save($title, $genre, $resum, $affiche, $bg);
    }
}
?>