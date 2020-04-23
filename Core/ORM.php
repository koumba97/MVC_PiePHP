<?php
class ORM{

    public function create($table, $fields){
        //retourne un id   
        "INSERT into $table() VALUES()"; 
    }

    public function read($table, $id){
        //retourne un tableau associatif de l' enregistrement
        "SELECT * FROM $table WHERE id=$id"; 
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