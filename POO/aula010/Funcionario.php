<?php
require_once "Pessoa.php";

Class Funcionario extends Pessoa {
    private $sector;
    private $isWorking;

    public function Funcionario($n=0, $a=0, $g=0, $s=0, $i=0){
        $this->setName($n);
        $this->setAge($a);
        $this->setGender($g);
        $this->setSector($s);
        $this->setIsWorking($i);
    }

    public function getSector(){
        return $this->sector;
    }

    public function setSector($newSector){
        $this->sector=$newSector;
    }

    public function getIsWorking(){
        return $this->isWorking;
    }

    public function setIsWorking($newWorking){
        $this->isWorking=$newWorking;
    }

    public function changeWork(){
        if($this->getIsWorking()){
            $this->setIsWorking(false);
        }else{
            $this->setIsWorking(true);
        }
    }
}

?>