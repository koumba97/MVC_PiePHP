<?php
namespace Core;

class ORM{

    public function __construct(){
        $this->bdd = new \PDO('mysql:host=localhost;dbname=Pie_PHP;charset=utf8', 'root', 'root');       
    }
    
    public function create($table, $fields){
        $all_fields=array();
        $all_val=array();
        

        for($i=0 ; $i<count($fields) ; $i++){
            array_push($all_fields, array_keys($fields)[$i]);
            array_push($all_val, $fields[array_keys($fields)[$i]]);
        }
        
        $fields_names= str_replace(' ', ', ', implode($all_fields, ' '));
       

        $all_values=array();
        foreach ($all_val as $value){
            array_push($all_values, '"'.$value.'"');
        }

        $fields_values= str_replace('_ESPACE_', ', ', implode($all_values, '_ESPACE_'));

        $this->bdd->exec("INSERT INTO $table ($fields_names)
        VALUES($fields_values)"); 
    }


    public function read($table, $id){
        
        if ($table=="articles"){
       
            $read = $this->bdd->query("SELECT * FROM $table WHERE id_article=$id");
            foreach($read as $content){
                echo "Auteur : ".$content['author'] . "<br>";
                echo "Titre : ".$content['title'] . "<br>";
                echo $content['content'];
            }
        }
        
    } 

   
    public function update($table, $id, $fields){
        //retourne un booleen

        if ($table=="articles"){

            $all_fields=array();
            $all_val=array();
            $update_array=array();

            for($i=0 ; $i<count($fields) ; $i++){
                array_push($all_fields, array_keys($fields)[$i]);
                array_push($all_val, $fields[array_keys($fields)[$i]]);
            }

            for($y=0 ; $y<count($fields) ; $y++){
                array_push($update_array, $all_fields[$y] .'='. '"'.$all_val[$y].'"');
            }

            //print_r($update_array);

            echo $update_values= str_replace('_ESPACE_', ', ', implode($update_array, '_ESPACE_'));

            $update = $this->bdd->query("UPDATE $table SET $update_values WHERE id_article=$id");
        }
    } 


    public function delete($table, $id){
        
        $this->bdd->query("DELETE FROM $table WHERE id_article=$id");
    } 


    public function find($table, $params=array('WHERE'=> '1', 'ORDER BY' => 'id ASC', 'LIMIT ' => '') ) {
        //retourne un tableau d'enregistrements
    }

}