<?php
include '../../../Core/Router.php';
Router::connect('/', ['controller' => 'app', 'action' => 'index']);
Router::connect('/add', ['controller' => 'user', 'action' => 'add']);
Router::connect('/register', ['controller' => 'user', 'action' => 'register']);
Router::connect('/login', ['controller' => 'user', 'action' => 'login']);
//Router::connect ("/user/$id", ['controller' => user , 'action' => 'show']);