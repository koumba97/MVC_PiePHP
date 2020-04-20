<?php 

class userController{

    public function run(){
        echo __CLASS__ . " [OK]" . "<br>" ;
    }

    public function addAction(){
        echo "hey ! voici le contenu de la méthode addAction" . PHP_EOL;
    }

    public function registerAction(){
        $email=$_POST['email'];
        $password=$_POST['password'];

        if (isset($email) && isset($password)){
            echo "ok";
            $saveData = new userModel($email, $password);
            $saveData->save();
            //$this->render("login");
        }
    }

}