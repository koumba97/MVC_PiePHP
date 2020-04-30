<?php
namespace Model;
@session_start();


class userModel{

    private $email;
    private $password;
    private $data;
    

    public function __construct($params)
    {   
        $this->params=$params;
        $this->bdd = new \PDO('mysql:host=localhost;dbname=Pie_PHP;charset=utf8', 'root', 'root');
    }
    public function save(){
        
        $email=$this->params['email'];
        $password=sha1($this->params['password']);
        $name=$this->params['name'];
        $surname=$this->params['surname'];

        $this->data = $this->bdd->query("SELECT * FROM user WHERE email = '" . $email . "'");
        if ($this->data->fetchColumn() > 0){
            return "veuillez saisir une autre adresse email";
        }
        else{

            $this->bdd->exec("INSERT INTO user (id, email, password, name, surname) 
            VALUES(0, '".$email."', '".$password."', '".$name."', '".$surname."') ") or die("failed");
    
            return "inscription réalisée avec succès";
        }

    }

    public function read($id){
        
        $select_data = $this->bdd->query("SELECT * FROM user WHERE id=$id");
        while($result = $select_data->fetch()){
            echo $id=$result['id'] . " " . $email=$result['email'] . " " . $password=$result['password'];
        }

    }

    
    public function update($update_email, $update_password, $id){

        $data_update= $this->bdd->prepare("UPDATE user SET email=$update_email, password=$update_password WHERE id =$id");
        $data_update->execute();

    }


    public function delete($id){

        $this->bdd->exec("DELETE FROM 'user' WHERE id=$id"); 
        
    }

    public function read_all(){

        $select_data = $this->bdd->query("SELECT * FROM user");
        while($result = $select_data->fetch()){
            echo $id=$result['id'] . " " . $email=$result['email'] . " " . $password=$result['password'];
        }
  
    }
}