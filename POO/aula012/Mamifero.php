<?php
require_once "Animal.php";

class Mamifero extends Animal{
    private $corPelo;

    public function Mamifero($p=0, $i=0, $m=0, $c){
        $this->setPeso($p);
        $this->setIdade($i);
        $this->setMembros($m);
        $this->setCorPelo($c);
    }
    
    public function getCorPelo(){
        return $this->corPelo;
    }

    public function setCorPelo($newCor){
        return $this->corPelo=$newCor;
    }

    public function locomover(){
        echo "O mamifero anda <br>";
    }

    public function alimentar(){
        echo "O mamifero se alimenta de leite materno e depois, mais velgo, ele caça <br>";
    }

    public function emitirSom(){
        echo "Laindo, miando, etc... <br>";
    }
}

?>