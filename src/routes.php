<?php
//include '../../../Core/Router.php';
Core\Router::connect('MVC_PiePHP/', ['controller' => 'app', 'action' => 'index']);
Core\Router::connect('MVC_PiePHP/', ['controller' => 'user', 'action' => 'add']);