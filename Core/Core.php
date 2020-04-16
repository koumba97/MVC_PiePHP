<?php 
namespace Core;

class Core{


    public function run(){
        echo __CLASS__ . " [OK]" . "<br>";


        $url= str_replace(BASE_URI, '', $_SERVER['REQUEST_URI']);
 
        include '../../../src/routes.php';
        //include '../../../Core/Router.php';
        //include '../../../src/Controller/UserController.php';
  

        $array_url = explode(' ', str_replace('/', ' ', $url));

        $myArray= ['Controller'=> $array_url[2], 'Action'=> $array_url[3]];

     
        $routes[$url] = Router::get($url);
     
        

        //print_r($myArray);
        
        Router::get($url);

        $ctrl = Router::get($url);
        
        if (isset($array_url[1]) && isset($array_url[2])){

            $myController = $myArray['Controller'].'Controller';
            $myAction = $myArray['Action'].'Action';

            if (class_exists($myController)){

                if(method_exists($myController, $myAction)){
                    //$instance = new $myController();
                    //$instance->$myAction();
                    echo "okkkk";
                }
                else{
                    echo "error 404 - method not found";
                }
            }
            else{
                echo "error 404 - class not found";
            }
        }

        else{
            $myController="appController";
            $myAction="indexAction";
        }
        

      
    }


}

