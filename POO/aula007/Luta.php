<?php

require_once "Lutador.php";

Class Luta{
    private $Fighter1;
    private $Fighter2;
    private $rounds;
    private $aproved;

    public function Luta($fg1, $fg2){
        $this->Fighter1=$fg1;
        $this->Fighter2=$fg2;
        $this->scaleFight();
        $this->rounds=10;
    }
    
    public function getFighter1(){
        return $this->Fighter1;
    }

    public function setFigther1($newFG1){
        $this->figther1=$newFG1;
    }

    public function getFighter2(){
        return $this->Fighter2;
    }

    public function setFigther2($newFG2){
        $this->figther2=$newFG2;
    }

    public function getRounds(){
        return $this->rounds;
    }

    private function setRounds($newRounds){
        $this->rounds=$newRounds;
    }

    public function getAproved(){
        return $this->aproved;
    }

    private function setAproved($newAPV){
        $this->aproved=$newAPV;
    }

    private function scaleFight(){
        if($this->getFighter1() != $this->getFighter2()){
            if($this->getFighter1()->getCategory() === $this->getFighter2()->getCategory()){
                $this->setAproved(true);
                echo "Luta marcada entre {$this->getFighter1()->getName()} e {$this->getFighter2()->getName()} ! <br>";
            }else{
                echo "A luta não pode ser marcada entre esses lutadores, pois são de categorias diferentes! <br>";
                $this->setAproved(false);
            }
        }else{
            echo "!Impossível marcar luta. <br>";
        }
    }
    public function Fight(){
        if($this->getAproved()){
            $this->getFighter1()->present();
            echo "<br>";
            $this->getFighter2()->present();
            echo "<br>";
            $winner = rand(0,2);
            switch ($winner){
                case 0:
                    $this->getFighter1()->drawFight();
                    $this->getFighter2()->drawFight();
                    echo "A luta empatou! <br>";
                    break;
                case 1:
                    $this->getFighter1()->winFight();
                    $this->getFighter2()->loseFight();
                    echo "O grande vencedor é " . $this->getFighter1()->getName() . "!!!!! <br>";
                    break;
                case 2:
                    $this->getFighter1()->loseFight();
                    $this->getFighter2()->winFight();
                    echo "O grande vencedor é " . $this->getFighter2()->getName()  . "!!!!! <br>";
                    break;
            }
            $this->getFighter1()->status();
            echo "<br>";
            $this->getFighter2()->status();
        }else{
            echo "A luta não foi aprovada, e portanto, ela não pode acontecer. <br>";
        }
    }
}

?>
