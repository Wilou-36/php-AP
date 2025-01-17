<?php

class AppMVC{
    
    //déclaration d'un attribut
    private $monapp;

    public function afficherPage($page){ 
       if ($page == 1)$this -> page1();
       else if ($page == 2) $this -> page2();
       else $this -> page1();
    }
    
    public function page1(){
        echo "page 1";
    }

    public function page2(){
        echo "page 2";
    }


}

?>