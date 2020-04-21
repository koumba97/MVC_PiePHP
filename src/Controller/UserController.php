<?php 
//namespace Controller;
include('../../../Core/Controller.php');

class userController extends Controller{

    public function __construct(){
        //$request = new Request();
        //$request->__construct();
    }

    public function run(){
        echo __CLASS__ . " [OK]" . "<br>" ;
    }

    public function addAction(){
        echo "hey ! voici le contenu de la méthode addAction" . PHP_EOL;
    }

    public function registerAction(){

        $this->render("register");

        if (isset($_POST['name'])  && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['password'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        
         
            $saveData = new userModel($email, $password);
            $saveData->save();
            
            
        }
    }

    public function loginAction() {

        $this->render("login");
       
    }


    public function showAction($id) {
        echo " ID de l' utilisateur a afficher : $id " . PHP_EOL ;
       
    }

}