<?php

class Request{

    public function check($email_verif, $password_verif){
        
        $email = trim(htmlspecialchars($email_verif));
        $password = trim(htmlspecialchars($password_verif));
    }
}