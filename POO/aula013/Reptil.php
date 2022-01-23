<?php
require_once "Animal.php";

class Reptil extends Animal{
    private $corEscama;

    public function Reptil($p=0, $i=0, $m=0, $c){
        $this->setPeso($p);
        $this->setIdade($i);
        $this->setMembros($m);
        $this->setCorEscama($c);
    }
    
    public function getCorEscama(){
        return $this->corEscama;
    }

    public function setCorEscama($newCor){
        return $this->corEscama=$newCor;
    }

    public function locomover(){
        echo "O Reptil rasteja ou desliza <br>";
    }

    public function alimentar(){
        echo "O reptil se alimenta de presas menores que ele. <br>";
    }

    public function emitirSom(){
        echo "Normalmente emite sons pessonhentos. (PSSSSSS) <br>";
    }
}

?>