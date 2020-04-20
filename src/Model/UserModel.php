<?php

class userModel{

    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
        //connexion bdd
    }
    public function save(){
        //enregistrement sur la bdd

    }
}