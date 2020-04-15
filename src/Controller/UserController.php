<?php 
namespace Controller;

class userController{

    public function run(){
        echo __CLASS__ . " [OK]" . "<br>" ;
    }

    public function addAction(){
        $myArray=['Controller' => 'User', 'Action' => 'Add'];
        
    }
}


