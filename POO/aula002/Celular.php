<?php

Class Celular{
    var $batery;
    var $brightness;
    var $volume;
    var $storage;
    var $isOn;

    function on(){
        echo "Lifando celular <br>";
        $this->isOn=true;
    }
    function off(){
        echo "Desligando celular <br>";
        $this->isOn=false;
    }
    function download(){
        echo "Baixando aplicativo, isso vai consumir 5 GB de memoria <br>";
        $this->storage-=5;
    }
    function unstall(){
        echo "desistalando aplicativo, isso vai liberar 5 GB de memoria <br>";
        $this->storage+=5;
    }
    function upVolume(){
        echo "Aumentando o volume <br>";
        $this->volume+=10;
    }
    function downVolume(){
        echo "Dminunindo o volume <br>";
        $this->volume-=10;
    }
    function upB(){
        echo "Aumentando o brilho <br>";
        $this->brightness+=20;
    }
    function downB(){
        echo "Diminuindo o brilho <br>";
        $this->brightness-=20;
    }
    function haveCharge(){
        if(this->batery>0){
            echo "Ainda tem bateria no celular <br>";
        }else{
            echo "Celular descarregado <br>";
        }
    }
}
?>