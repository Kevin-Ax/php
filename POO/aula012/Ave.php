<?php
require_once "Animal.php";

class Ave extends Animal{
    private $corPena;

    public function Ave($p=0, $i=0, $m=0, $c){
        $this->setPeso($p);
        $this->setIdade($i);
        $this->setMembros($m);
        $this->setCorPena($c);
    }
    
    public function getCorPena(){
        return $this->corPena;
    }

    public function setCorPena($newCor){
        return $this->corPena=$newCor;
    }

    public function fazerNinho(){
        echo "Ave fazendo ninho.... <br>";
    }

    public function locomover(){
        echo "A Ave voa <br>";
    }

    public function alimentar(){
        echo "A Ave se alimenta de Grãos e frutas. <br>";
    }

    public function emitirSom(){
        echo "Piam ou coagem. <br>";
    }
}

?>