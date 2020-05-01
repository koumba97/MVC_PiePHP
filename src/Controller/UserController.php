<?php 
session_start();

use \Core\Controller;
use \Core\Request;

class userController extends Controller{

    public $params;
    public $request;
    public $id;

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
            $user = new Model\userModel('user', $params);
            
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
            $password=sha1($_POST['password']);

            $login = $this->bdd->query("SELECT * FROM user WHERE email='$email'");
            foreach($login as $content){
                $password_check=$content['password'];
                $id=$content['id'];
                $email=$content['email'];
                $name=$content['name'];
                $surname=$content['surname'];
            }

            if($password==$password_check){
                
                $_SESSION['id']=$id;
                $_SESSION['email']=$email;
                $_SESSION['name']=$name;
                $_SESSION['surname']=$surname;
                header('location:profil');
            }

            else{
            ?><script>alert("Mot de passe incorrect");</script><?php
            }


        }

       
    }

    public function logoutAction() {

        $_SESSION=array();
        session_destroy();
        header('Location: index');
        //$this->render("login");

      
    }


    public function showAction() {
        $id=$_SESSION['id'];
        //echo " ID de l' utilisateur a afficher : $id " . PHP_EOL ;
        $this->render("profil");
    }

    public function updateAction(){
        $update=$_POST['update'];

        if($update=="identity"){
            $name=$_POST['name'];
            $surname=$_POST['surname'];
            $email=$_POST['email'];
            $id=$_SESSION['id'];

            $data_update= $this->bdd->query("UPDATE user SET name='".$name."', surname='".$surname."', email='".$email."' WHERE id=$id") or die("failed");
         
            $_SESSION['name']=$name;
            $_SESSION['surname']=$surname;
            $_SESSION['email']=$email;

            header('location:profil');
            
        }


        elseif($update=="password"){
            $old_password=$_POST['password'];
            $new_password=$_POST['new_password'];
            $new_password2=$_POST['new_password2'];
            $id=$_SESSION['id'];

            $req = $this->bdd->query("SELECT * FROM user WHERE id=$id") or die("failed");;
            foreach($req as $result){
                $password_check=$result['password'];
            }

            if(sha1($old_password)==$password_check){

                if($new_password==$new_password2){
                    $new=sha1($new_password);
                    $this->bdd->query("UPDATE user SET password='".$new."' WHERE id=$id") or die("failed");

                    header('location:profil');
                }
                else{
                    echo "Confirmation de mot de passe incorrect";
                }

            }
            else{
                echo "Mot de passe incorrect";
            }


        }

        elseif($update=="delete"){
            $password=$_POST['password'];
            $password2=$_POST['password2'];
            $id=$_SESSION['id'];


            $req = $this->bdd->query("SELECT * FROM user WHERE id=$id") or die("failed");;
            foreach($req as $result){
                $password_check=$result['password'];
            }

            if($password==$password2){

                if(sha1($password)==$password_check){

                    $this->bdd->exec("DELETE FROM user' WHERE id=$id"); 
    
                    $_SESSION=array();
                    session_destroy();
                    header('Location: index');
                }
                else {
                    echo "mot de passe incorrect";
                }
            }
            else{
                echo "Confirmation de mot de passe incorrect";
            }
        }


    }

}