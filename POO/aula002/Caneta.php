<?php

class Caneta{
    var $model;
    var $color;
    var $pincel;
    var $fuel;
    var $isOpen;

    function write(){
        echo "Escreveu essa frase <br>" ;
        $this->fuel-=10;
    }
    function paint(){
        echo "Pintou na tela <br>";
        $this->fuel -= 25;
    }
    function open(){
        $this->isOpen = true;
    }
    function close(){
        $this->isOpen = false;
    }
    function reload(){
        $fuel = 100;
    }
}


















?>