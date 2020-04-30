<?php
//session_start();
include '../../../Core/Router.php';
$url_params = explode(DIRECTORY_SEPARATOR, $_SERVER['REQUEST_URI']);

if(substr($url_params[2], 0, 5)=="movie"){

    $id_movie=substr($url_params[2], 5);
}
Router::connect('/', ['controller' => 'app', 'action' => 'index']);
Router::connect('/add', ['controller' => 'user', 'action' => 'add']);
Router::connect('/register', ['controller' => 'user', 'action' => 'register']);
Router::connect('/login', ['controller' => 'user', 'action' => 'login']);
Router::connect('/logout', ['controller' => 'user', 'action' => 'logout']);
Router::connect('/profil', ['controller' => 'user', 'action' => 'show']);

if(isset($id_movie)){

    Router::connect("/movie$id_movie", ['controller' => 'movie', 'action' => 'show']);
}
//Router::connect ("/user/$id", ['controller' => user , 'action' => 'show']);