<?php
require_once "Mamifero.php";

class Gato extends Mamifero{
    public function Gato($p,$i, $m, $c){
        $this->setPeso($p);
        $this->setIdade($i);
        $this->setMembros($m);
        $this->setCorPelo($c);
    }

    public function emitirSom(){
        echo "Miauu! <br>";  
    }

    public function darBanho(){
        echo "se Lambendo para tomar banho <br>";
    }

?>