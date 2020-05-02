<?php 
session_start();

use \Core\Controller;
use \Core\Request;

class genreController extends Controller{

    public function showAction() {

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

        $name = $_POST['name'];
        $resum = $_POST['resum'];
        $image = $_POST['image'];

        $movie = new Model\genreModel();
        $movie->save($name, $image, $resum);
    }
}
?>