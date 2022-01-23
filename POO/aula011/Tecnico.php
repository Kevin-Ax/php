<?php
require_once "Aluno.php";

final Class Tecnico extends Aluno{
    private $profRegister;

    public function Aluno($n=0, $a=0, $g=0, $m=0, $d=0, $b=0, $r=0){
        $this->setName($n);
        $this->setAge($a);
        $this->setGender($g);
        $this->setMatNum($m);
        $this->setDiscp($d);
        $this->setProfRegister($b);
    }

    public function getProfRegister(){
        return $this->profRegister;
    }

    public function setProfRegister($newRegister){
        $this->profRegister=$newRegister;
    }

    public final function pratice(){
        echo "Praticando... <br>";
    }
}

?>