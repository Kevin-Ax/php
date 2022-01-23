<?php
require_once "Pessoa.php";

Class Professor extends Pessoa{
    private $especiality;
    private $sal;

    public function Professor($n=0, $a=0, $g=0, $e=0, $s=0){
        $this->setName($n);
        $this->setAge($a);
        $this->setGender($g);
        $this->setEspeciality($e);
        $this->setSal($s);
    }

    public function getEspeciality(){
        return $this->especiality;
    }

    public function setEspeciality($newEspeciality){
        $this->especiality=$newEspeciality;
    }

    public function getSal(){
        return $this->sal;
    }

    public function setSal($newSal){
        $this->sal=$newSal;
    }

    public function promotion($amont){
        $this->setSal($this->getSal()+$amont);
    }
}

?>