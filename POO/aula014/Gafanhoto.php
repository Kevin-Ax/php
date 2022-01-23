<?php
require_once "Pessoa.php";

class Gafanhoto extends Pessoa{
    private $login;
    private $toAssistindo;
    private $totAssistido;

    public function Gafanhoto($n=" ", $i=0, $s="U", $x=0, $l=00000, $ta=false, $tt=0){
        $this->setNome($n);
        $this->setIdade($i);
        $this->SetSExo($s);
        $this->setXP($x);
        $this->setLogin($l);
        $this->setAssistindo($ta);
        $this->setTotAssistido($tt);
    }

    public function getLogin(){
        return $this->login;
    }

    public function setLogin($newLogin){
        $this->login=$newLogin;
    }

    public function toAssistindo(){
        return $this->toAssistindo;
    }

    public function setAssistindo($newA){
        $this->toAssistindo=$newA;
    }

    public function getTotAssistido(){
        return $this->totAssistido;
    }

    public function setTotAssistido($newTot){
        $this->totAssistido=$newTot;
    }

    public function verMaisUm(){
        $this->setAssistindo(true);
        $this->ganharXP();
        $newt=$this->getTotAssistido()+1;
        $this->setTotAssistido($newt);
        $this->setAssistindo(false);
    }
}  

?>