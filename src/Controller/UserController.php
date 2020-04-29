<?php 
//namespace Controller;

use \Core\Controller;
use \Core\Request;

class userController extends Controller{

    public $params;
    public $request;
    public function __construct(){
        // $request= new Request();
        // $this->request= $request;
        
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
   
            $data = array("email" => $email, "password" => $password);
            $this->request= new Request($data);
            $params = $this->request->getQueryParams();
          
            echo "params(".$params.")";
            $saveData = new Model\userModel($email, $password);
            $saveData->save();  
            
        }
    }

    public function loginAction() {

        $this->render("login");
       
    }

    public function logoutAction() {

        $_SESSION=array();
        session_destroy();
        header('Location: index');
        //$this->render("login");
       
    }


    public function showAction($id) {
        echo " ID de l' utilisateur a afficher : $id " . PHP_EOL ;
       
    }

}