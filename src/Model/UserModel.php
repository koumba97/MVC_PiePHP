<?php
//namespace Model;
include('../../../Core/Request.php');


class userModel{

    private $email;
    private $password;
    

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
        //$request = new Request();
        $this->bdd = new PDO('mysql:host=localhost;dbname=Pie_PHP;charset=utf8', 'root', 'root');
    }
    public function save(){
        
        $this->pdo->query("SELECT * FROM user WHERE email = '" . $this->email . "'");
        if ($this->data->fetchColumn() > 0) {
            echo "veuillez saisir une autre adresse email";
        }
        else{

            $this->bdd->exec("INSERT INTO user (id, email, password) 
            VALUES(0, '" . $this->email . "', '" . $this->password . "') ") or die("failed");
    
            echo "inscription réalisée avec succès";
        }

    }

    public function read(){
        
        //SELECT
        $this->bdd->exec();
    }

    
    public function update(){
        
        //UPDATE
        $this->bdd->exec();
    }


    public function delete(){
        
        //DELETE
        $this->bdd->exec();
    }

}