<?php
require_once "Reptil.php";

class Tartaruga extends Reptil{
    private $corDoCasco;

    public function Tartaruga($p, $i, $m, $c, $cc){
        $this->setPeso($p);
        $this->setIdade($i);
        $this->setMembros($m);
        $this->setCorEscama($c);
        $this->setCorCasco($cc);
    }

    public function getCorCaso(){
        return $this->corDoCaso;
    }

    public function setCorCasco($newCorCasco){
        $this->corDoCasco=$newCorCasco;
    }

    public function locomover(){
        echo "Anda beeeeem devagar <br>";
    }
}

?>