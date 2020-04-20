<?php 
namespace Core;

class Core{

    public function run(){

        echo __CLASS__ . " [OK]" . "<br>";
        $url= str_replace(BASE_URI, '', $_SERVER['REQUEST_URI']);
 
        include '../../../src/routes.php';
  

        $array_url = explode(' ', str_replace('/', ' ', $url));

        if( ($array_url[2]!=="") && ($array_url[2]=="register") ){
            $myRoute=\Router::get($url)['/register'];
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

