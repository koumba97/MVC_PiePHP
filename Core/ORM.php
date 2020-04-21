<?php
class ORM{

    public function create($table, $fields){
        //retourne un id   
    }

    public function read($table, $id){
        //retourne un tableau associatif de l' enregistrement
    } 
   
    public function update($table, $id, $fields){
        //retourne un booleen  
    } 

    public function delete($table, $id){
        //retourne un booleen
    } 

    public function find($table, $params=array('WHERE'=> '1', 'ORDER BY' => 'id ASC', 'LIMIT ' => '') ) {
        //retourne un tableau d'enregistrements
    }

}