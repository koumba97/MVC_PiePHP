<?php
namespace Core;
class Request{

    public function __construct($request){
  
        foreach($request as $key=>$value){

            $this->{$key} = trim(stripslashes(htmlspecialchars(@$this->$value)));
            //$request[$key] = $this->{$key};
            //print_r($request);
        }

        $this->request=$request;
    }

    public function getQueryParams(){
        return print_r($this->request);
    }
}