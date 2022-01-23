<?php

abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $XP;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($newName){
        $this->nome=$newName;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($newIdade){
        $this->idade=$newIdade;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($newSexo){
        $this->sexo=$newSexo;
    }

    public function getXP(){
        return $this->XP;
    }

    public function setXP($newXP){
        $this->XP=$newXP;
    }

    protected function ganharXP(){
        $this->setXP($this->getXP()+10);
    } 
}

?>