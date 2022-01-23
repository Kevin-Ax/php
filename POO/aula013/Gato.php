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

    //não puporta sobrecarga;
    
    public function reagirFrase($frase){
        echo "Ignorando humano <br>";
    }

    public function reagirFD($frase, $dono){
        if($dono){
            echo "Ronrronar e receber carinho <br>";
        }else{
            echo "Se esfregar e ignorar <br>";
        }
    }

    public function reagir(){
        if($this->getIdade() < 2){
            echo "receber carinho e brincar <br>";
        }else if($this->getIdade() < 4){
            echo "Recebe carinho <br>";
        }else{
            echo "ignora <br>";
        }
    }

}
?>