<?php 
namespace Core;

class Core{

    public function run(){

        echo __CLASS__ . " [OK]" . "<br>";
        $url= str_replace(BASE_URI, '', $_SERVER['REQUEST_URI']);
 
        include '../../../src/routes.php';
  

        $array_url = explode(' ', str_replace('/', ' ', $url));

        if( ($array_url[2]!=="")){
            if(!isset(\Router::get($url)["/$array_url[2]"])){
                $myRoute=\Router::get($url)['/'];
            }
            else{
                $myRoute=\Router::get($url)["/$array_url[2]"];
            }
        }
        else{
            $myRoute=\Router::get($url)['/'];
        }


        $myController = $myRoute['controller'].'Controller';
        $myAction = $myRoute['action'].'Action';
       

        if (class_exists($myController)){

            if(method_exists($myController, $myAction)){
                $instance = new $myController();
                $instance->$myAction();
         
            }
            else{
                echo "error 404 - method not found";
            }
        }
        else{
            echo "error 404 - class not found";
        }
    }
}

