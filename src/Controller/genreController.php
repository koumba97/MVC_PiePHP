<?php 
session_start();

use \Core\Controller;
use \Core\Request;

class genreController extends Controller{

    public function showAction() {

    }

    public function updateAction(){
        $id_genre = $_POST['id_genre'];
        $name = $_POST['name'];
        $resum = $_POST['resum_edit'];

        $genre = new Model\genreModel();
        $genre->update($id_genre, $name, $resum);
    }

    public function deleteAction(){

        $url_params = explode(DIRECTORY_SEPARATOR, $_SERVER['REQUEST_URI']);
        $id_genre_delete=substr($url_params[2], 11);

        $genre = new Model\genreModel();
        $genre->delete($id_genre_delete);
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