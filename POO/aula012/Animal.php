<?php

abstract class Animal{
    private $peso;
    private $idade;
    private $membros;

    public function getPeso(){
        return $this->peso;
    }

    protected function setPeso($newPeso){
        $this->peso=$newPeso;
    }

    public function getIdade(){
        return $this->idade;
    }

    protected function setIdade($newIdade){
        $this->idade=$newIdade;
    }

    public function getMembros(){
        return $this->membros;
    }

    protected function setMembros($newMembros){
        $this->membros=$newMembros;
    }

    protected abstract function locomover();
    protected abstract function alimentar();
    protected abstract function emitirSom();

}

?>