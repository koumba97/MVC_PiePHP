<?php 
namespace Core;

class Core{

    public function run(){
        echo __CLASS__ . " [OK]" . "<br>" ;

      
    }


}

class appController{

}

$url= substr($_SERVER['REQUEST_URI'],1);

include '../../../src/routes.php';

$array_url = explode(' ', str_replace('/', ' ', $url));
$myArray= ['Controller'=>$array_url[1], 'Action'=>$array_url[2]];
//print_r($array_url);


$myController = $myArray['Controller'].'Controller';
$myAction = $myArray['Action'].'Action';

$instance = new $myController();
$instance->$myAction();
