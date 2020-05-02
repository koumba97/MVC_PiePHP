<?php 
session_start();

use \Core\Controller;
use \Core\Request;

class historiqueController extends Controller{

    public function showAction() {

        $this->render("historique");

    }

    public function addAction() {

        $url_params = explode(DIRECTORY_SEPARATOR, $_SERVER['REQUEST_URI']);

        $id_movie=substr($url_params[2], 13);
        $id_user= $_SESSION['id'];

        $movie = new Model\historiqueModel();
        $movie->save($id_movie, $id_user);
    }

    public function deleteAction() {

        $url_params = explode(DIRECTORY_SEPARATOR, $_SERVER['REQUEST_URI']);

        $id_histo=substr($url_params[2], 16);

        $movie = new Model\historiqueModel();
        $movie->delete($id_histo);
    }

}

