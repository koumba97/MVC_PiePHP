<?php 
//namespace Controller;

use \Core\Controller;
use \Core\Request;

class userController extends Controller{

    public $params;
    public $request;

    public function __construct(){

        $this->bdd = new \PDO('mysql:host=localhost;dbname=Pie_PHP;charset=utf8', 'root', 'root');
        
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
            $name=$_POST['name'];
            $surname=$_POST['surname'];

   
            $params = array("email"=>$email, "password"=>$password, "name"=>$name, "surname"=>$surname);
            $this->request= new Request($params);
            
            $params = $this->request->getQueryParams();
            $user = new Model\userModel($params);
            
            //if(!$user->id){

                $user->save();
            //}
            //self::$_render = " Votre compte a ete cree ." . PHP_EOL ;
             
            
        }
    }

    public function loginAction() {

        $this->render("login");

        if (isset($_POST['email']) && isset($_POST['password'])){
            
            $email=$_POST['email'];
            $password=$_POST['password'];

            $login = $this->bdd->query("SELECT * FROM user WHERE email='$email'");
            foreach($login as $content){
                $password_check=$content['password'];
            }

            if($password==$password_check){
                echo "connexion réussie";
            }

            else{
                echo "Mot de passe incorrect";
            }


        }

       
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