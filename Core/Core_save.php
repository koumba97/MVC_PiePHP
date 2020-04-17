<?php
namespace Core;

class Core{


    public function run(){

        echo __CLASS__ . " [OK]" . "<br>";
        $url= str_replace(BASE_URI, '', $_SERVER['REQUEST_URI']);


        $array_url = explode(' ', str_replace('/', ' ', $url));

        print_r($array_url);
        if( ($array_url[2]!=="") && ($array_url[3]!=="") ){
            $myArray=['Controller'=> $array_url[2], 'Action'=> $array_url[3]];
        }
        else{
            $myArray=['Controller'=> 'app', 'Action'=> 'index'];
        }


        $myController = $myArray['Controller'].'Controller';
        $myAction = $myArray['Action'].'Action';


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

