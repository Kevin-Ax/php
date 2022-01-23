<?php
require_once "Animal.php";

class Peixe extends Animal{
    private $corEscama;

    public function Peixe($p=0, $i=0, $m=0, $c){
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

    public function soltaBolhas(){
        echo "blub blub blub <br>";
    }

    public function locomover(){
        echo "O Peixe nada <br>";
    }

    public function alimentar(){
        echo "O Peixe se alimenta de algas e peixes menores. <br>";
    }

    public function emitirSom(){
        echo "Não emitem sons sensiveis ao ouvido humano. <br>";
    }
}

?>