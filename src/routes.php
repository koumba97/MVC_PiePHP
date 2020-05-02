<?php
//session_start();
include '../../../Core/Router.php';
$url_params = explode(DIRECTORY_SEPARATOR, $_SERVER['REQUEST_URI']);

if(substr($url_params[2], 0, 5)=="movie"){
    $id_movie=substr($url_params[2], 5);
}
elseif(substr($url_params[2], 0, 11)=="updateMovie"){
    $id_movie_update=substr($url_params[2], 11);
}
elseif(substr($url_params[2], 0, 11)=="deleteMovie"){
    $id_movie_delete=substr($url_params[2], 11);
}
elseif(substr($url_params[2], 0, 11)=="updateGenre"){
    $id_genre_update=substr($url_params[2], 11);
}
elseif(substr($url_params[2], 0, 11)=="deleteGenre"){
    $id_genre_delete=substr($url_params[2], 11);
}
elseif(substr($url_params[2], 0, 13)=="addHistorique"){
    $id_historique_add=substr($url_params[2], 13);
}
elseif(substr($url_params[2], 0, 16)=="deleteHistorique"){
    $id_historique_delete=substr($url_params[2], 16);
}

// APP
Router::connect('/', ['controller' => 'app', 'action' => 'index']);
Router::connect('/genres', ['controller' => 'app', 'action' => 'genres']);



// USER
Router::connect('/userAdd', ['controller' => 'user', 'action' => 'add']);
Router::connect('/register', ['controller' => 'user', 'action' => 'register']);
Router::connect('/login', ['controller' => 'user', 'action' => 'login']);
Router::connect('/logout', ['controller' => 'user', 'action' => 'logout']);
Router::connect('/profilEdit', ['controller' => 'user', 'action' => 'edit']);
Router::connect('/updateProfil', ['controller' => 'user', 'action' => 'update']);
Router::connect("/profil", ['controller' => 'app', 'action' => 'show']);


// MOVIE
Router::connect("/addMovie", ['controller' => 'movie', 'action' => 'add']);
if(isset($id_movie)){
    Router::connect("/movie$id_movie", ['controller' => 'movie', 'action' => 'show']);
}
if(isset($id_movie_update)){
    Router::connect("/updateMovie$id_movie_update", ['controller' => 'movie', 'action' => 'update']);
}
if(isset($id_movie_delete)){
    Router::connect("/deleteMovie$id_movie_delete", ['controller' => 'movie', 'action' => 'delete']);
}



// GENRE
Router::connect("/addGenre", ['controller' => 'genre', 'action' => 'add']);
if(isset($id_genre_update)){   
    Router::connect("/updateGenre$id_genre_update", ['controller' => 'genre', 'action' => 'update']);
}
if(isset($id_genre_delete)){   
    Router::connect("/deleteGenre$id_genre_delete", ['controller' => 'genre', 'action' => 'delete']);
}



// HISTORIQUE
if(isset($id_historique_add)){
    Router::connect("/addHistorique$id_historique_add", ['controller' => 'historique', 'action' => 'add']);
}
if(isset($id_historique_delete)){
    Router::connect("/deleteHistorique$id_historique_delete", ['controller' => 'historique', 'action' => 'delete']);
}
