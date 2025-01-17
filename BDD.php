<?php
class BDD{

    private $mysql;
    public function __construct(){
        $this->mysqli -> close();

    }

    public function __connexion(){
        $this->mysqli = new mysqli("172.16.10.100","sio-tp2","SIOTP2","");

        if($this->mysql == false){
            return false;
        }
        else {
            return true;
        }


    }

    public function déconnexion(){
        if($this->mysqli != false){
            $this -> mysqli -> Close();
        }

    }

    public function requete(){

    }
}
?>