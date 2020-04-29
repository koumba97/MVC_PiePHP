<?php
namespace Core;

class Request{

    public function __construct($params){
        $this->params=$params; 
    }

    public function getQueryParams(){

       // print_r($this->params);
        foreach($this->params as $key=>$value){
           $this->{$key} = trim(stripslashes(htmlspecialchars(@$this->$value)));
        }
        return $this->params;
    }
}