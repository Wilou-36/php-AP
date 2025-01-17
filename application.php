<?php

class NomClass{
    
    //déclaration d'un attribut
    private $monattribut;

    public function __construct(){
        $this -> monattribut = 10;
    }
    

    public function getmaMethode(){
        return $this -> monattribut;

    }
    public function setmaMethode($value){
        if(($value >= 0) && ( $value<10)){
             $this -> monattribut = $value;
        }
    }
}


?>