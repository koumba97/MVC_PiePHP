<?php
namespace Core;

class ORM extends Database{

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
    
       
        //$this->query("SELECT * FROM $table WHERE id=$id");
        //return $this->fetch();
    } 

   
    public function update($table, $id, $fields){
        //retourne un booleen
        "UPDATE $table SET $fields WHERE id=$id";
    } 


    public function delete($table, $id){
        //retourne un booleen
        "DELETE FROM $table WHERE id=$id";
    } 


    public function find($table, $params=array('WHERE'=> '1', 'ORDER BY' => 'id ASC', 'LIMIT ' => '') ) {
        //retourne un tableau d'enregistrements
    }

}