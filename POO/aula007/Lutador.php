<?php

class Lutador{
    private $name;
    private $nation;
    private $age;
    private $highiest;
    private $heigth;
    private $category;
    private $wins;
    private $loses;
    private $draws;

    public function Lutador($name_="NEO", $nation_="EUA", $age_=30, $highiest_=1.85, $heigth_=78.2, $wins_=0, $loses_=0, $draws_=0){
        $this->name=$name_;
        $this->nation=$nation_;
        $this->age=$age_;
        $this->highiest=$highiest_;
        $this->setHeigth($heigth_);
        $this->wins=$wins_;
        $this->loses=$loses_;
        $this->draws=$draws_;
    }
    public function getName() {
        return $this->name;
    }
    private function setName($newName){
        $this->name=$newName;
    }
    public function getAge(){
        return $this->age;
    }
    private function setAge($newAge){
        $this->age=$newAge;
    }
    public function getNation(){
        return $this->nation;
    }
    private function setNation($newNation){
        $this->nation=$newNation;
    }
    public function getHighiest(){
        return $this->highiest;
    }
    private function setHighiest($newHighiest){
        $this->highiest=$newHighiest;
    }
    public function getHeigth(){
        return $this->heigth;
    }
    private function setHeigth($newHeigth){
        $this->heigth=$newHeigth;
        $this->setCategory();
    }
    public function getCategory(){
        return $this->category;
    }
    private function setCategory(){
        if($this->getHeigth()<=52.2){
            $this->category="Inválido";
        }else if($this->getHeigth()<=70.3){
            $this->category="Leve";
        }else if($this->getHeigth()<=89.9){
            $this->category="Médio";
        }else if($this->getHeigth()<=120.8){
            $this->category="Pesado";
        }else{
            $this->category="Inválido";
        }
    }
    public function getWins(){
        return $this->wins;
    }
    private function setWins($newWins){
        $this->wins=$newWins;
    }
    public function getLoses(){
        return $this->loses;
    }
    private function setLoses($newLoses){
        $this->loses=$newLoses;
    }
    public function getDraws(){
        return $this->draws;
    }
    private function setDraws($newDraws){
        $this->draws=$newDraws;
    }
    public function present(){
        echo "Vindo de {$this->getNation()} com {$this->getAge()} anos, pesando {$this->getHeigth()} Kg, com {$this->getHeigth()} de altura, tendo até agora um total de {$this->getWins()} vitórias!! {$this->getLoses()} derrotas e {$this->getDraws()} empates!! Senhoras e senhores, com vocês {$this->getName()}!!! .<br>";
    }
    public function status(){
        echo "Status do Lutador: <br>
        Nome: {$this->getName()}. <br>
        Nacionalidade: {$this->getNation()}. <br>
        Idade: {$this->getAge()}. <br>
        Peso: {$this->getHeigth()}. <br>
        Altura: {$this->getHighiest()}. <br>
        Categoria: {$this->getCategory()}. <br>
        Vitórias: {$this->getWins()}. <br>
        Derrotas: {$this->getLoses()}. <br>
        Empates: {$this->getDraws()}. <br>
        ";
    }
    public function winFight(){
        $this->setWins($this->getWins()+1);
    }
    public function loseFight(){
        $this->setLoses($this->getLoses()+1);
    }
    public function drawFight(){
        $this->setDraws($this->getDraws()+1);
    }
}

?>