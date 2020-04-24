<?php
namespace Core;

class Database{
    function connexion(){
        try{
            
            $bdd = new PDO("mysql:host=localhost;dbname=Pie_PHP;charset=utf8" , 'root', 'root');
        }
        
        catch(PDOException $error){
            echo $error->getMessage();
        }
    }
}

