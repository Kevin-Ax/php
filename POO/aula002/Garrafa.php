<?php

Class Garrafa{
    var $capacity;
    var $type;
    var $isOpen;
    var $isEmpty;

    function drink(){
        if($this->isEmpty==false){
            if($this->isOpen){
                echo "Bebendo $this->type. <br>";
                $this->capacity-=10;
            }else{
                echo "A garrafa está fechada, abra ela primeiro.";
            }
        }else{
            echo "A garrafa está vazia <br>";
        }
    }

    function showType(){
        echo "Garrafa de $this->type. <br>";
    }

    function open(){
        $this->isOpen=true;
    }

    function close(){
        $this->isOpen=false;
    }

    function empty(){
        if($this->capacity > 0){
            echo "Garrafa ainda não está vazia <br>";
            $this->isEmpty = false;
        }else{
            echo "Garrafa está vazia <br>";
            $this->isEmpty = true;
        }
    }
}

?>