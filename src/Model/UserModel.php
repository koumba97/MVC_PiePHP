<?php
namespace Model;



class userModel{

    private $email;
    private $password;
    private $data;
    

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
        $this->bdd = new \PDO('mysql:host=localhost;dbname=Pie_PHP;charset=utf8', 'root', 'root');
    }
    public function save(){
        
        $this->data = $this->bdd->query("SELECT * FROM user WHERE email = '" . $this->email . "'");

        if ($this->data->fetchColumn() > 0){
            echo "veuillez saisir une autre adresse email";
        }
        else{

            $this->bdd->exec("INSERT INTO user (id, email, password) 
            VALUES(0, '" . $this->email . "', '" . $this->password . "') ") or die("failed");
    
            echo "inscription réalisée avec succès";
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

}