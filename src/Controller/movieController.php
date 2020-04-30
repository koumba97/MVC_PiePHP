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


        $user = new Model\movieModel();
        $user->read($id_movie);
        $this->render("details");
    }
}
?>