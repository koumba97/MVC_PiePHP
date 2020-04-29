<?php
namespace Core;
class Entity{

    public $table;
	public $fields;
    public $id;
    public $orm;

    public function __construct($params =[]){

        // $params=
        // ['title' => "j'ai un super titre" ,
        // 'content' => 'et voici une super article de blog',
        // 'author' => 'Koum Koum'];
        foreach ($params as $key => $value) {
			$this->{$key} = $value;
        }
        
        print_r($params);
        $this->fields=$params;
      

    }

    public function create_entity(){
        return $this->orm->create($this->table, $this->fields);
    }

    public function read_entity(){
        
    }

    public function update_entity(){
        
    }

    public function delete_entity(){
        
    }

    public function find_entity($params){
        
    }
}