<?php

Class Celular{
    public $batery;
    private $brightness;
    private $volume;
    private $storage;
    private $isOn;

   /* public function Celular(){  //construtor da classe;
        $this->batery=100;
        $this->brightness=80;
        $this->volume=100;
        $this->storage=128;
        $this->isOn=true;
    }*/

    public function Celular($b=100, $bt=80, $v=100, $s=128, $o=1){  //construtor da classe com parâmetros;
        $this->batery=$b;
        $this->brightness=$bt;
        $this->volume=$v;
        $this->storage=$s;
        $this->isOn=$o;
    }

    public function getBatery(){
        return $this->batery;
    }

    public function setBatery($newBatery){
        $this->batery=$newBatery;
    }

    public function getBrightness(){
        return $this->brightness;
    }

    public function setBrightness($newBrightness){
        $this->brightness=$newBrightness;
    }

    public function getVolume(){
        return $this->volume;
    }

    public function setVolume($newVolume){
        $this->volume=$newVolume;
    }

    public function getStorage(){
        return $this->storage;
    }

    public function setStorage($newStorage){
        $this->storage=$newStorage;
    }

    public function isOn(){
        return $this->isOn;
    }

    public function on(){
        echo "ligando celular <br>";
        $this->isOn=true;
    }
    public function off(){
        echo "Desligando celular <br>";
        $this->isOn=false;
    }
    public function download(){
        echo "Baixando aplicativo, vai consumir 5 GB de memoria <br>";
        $this->storage-=5;
    }
    public function unstall(){
        echo "desistalando aplicativo, vai liberar 5 GB de memoria <br>";
        $this->storage+=5;
    }
    public function upVolume(){
        echo "Aumentando o volume <br>";
        $this->volume+=10;
    }
    public function downVolume(){
        echo "Diminuindo o volume <br>";
        $this->volume-=10;
    }
    public function upB(){
        echo "Aumentando o brilho <br>";
        $this->brightness+=20;
    }
    public function downB(){
        echo "Diminuindo o brilho <br>";
        $this->brightness-=20;
    }
    public function haveCharge(){
        if($this->batery>0){
            echo "Ainda tem bateria no celular <br>";
        }else{
            echo "Celular descarregado <br>";
        }
    }
}
?>