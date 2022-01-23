<?php
require_once "Controlador.php";

Class ControleRemoto implements Controlador{
    //atributes
    private $volume;
    private $isOn;
    private $plaing;
    
    //contructor
    public function ControleRemoto($v=20,$o=false, $p=false){
        $this->volume=$v;
        $this->isOn=$o;
        $this->plaing=$p;
    }
    //getters and setters
    private function getVolume(){
        return $this->volume;
    }
    private function setVolume($newVolume){
        $this->volume=$newVolume;
    }
    private function getIsOn(){
        return $this->isOn;
    }
    private function setIsOn($turn){
        $this->isOn=$turn;
    }
    private function getPlaing(){
        return $this->plaing;
    }
    private function setPlaing($turn){
        $this->plaing=$turn;
    }
    //interface implementation
    public function on(){
        $this->setIsOn(true);
    }
    public function off(){
        $this->setIsOn(false);
    }
    public function upVolume(){
        if($this->getIsOn() && $this->getVolume()<100){
            $this->setVolume($this->getVolume()+5);
        }
    }
    public function downVolume(){
        if($this->getIsOn() && $this->getVolume()>0){
            $this->setVolume($this->getVolume()-5);
        }
    }
    public function openMenu(){
        if($this->getIsOn()){
            echo "A TV está ligada; <br>";
        }else{
            echo "A TV está desligada; <br>";
        }
        if($this->getPlaing()){
            echo "A programação está tocando; <br>";
        }else{
            echo "A programação está pausada; <br>";
        }
        echo "Volume: ";
        if($this->getVolume()>0){
            for($cont=0; $cont<$this->getVolume(); $cont+=5){
                echo " I ";
            }
        }else{
            echo "A TV está mutada. <br>";
        }
        echo "<br>";
    }
    public function closeMenu(){
        echo "Fechando Menu da TV. <br>";
    }
    public function mute(){
        if($this->getIsOn() && $this->getVolume()>0){
            $this->setVolume(0);
        }
    }
    public function unMute(){
        if($this->getIsOn() && $this->getVolume()==0){
            $this->setVolume(50);
        }
    }
    public function pause(){
        if($this->getIsOn() && $this->getPlaing()){
            $this->setPlaing(false);
        }
    }
    public function play(){
        if($this->getIsOn() && !($this->getPlaing())){
            $this->setPlaing(true);
        }
    }
}

?>