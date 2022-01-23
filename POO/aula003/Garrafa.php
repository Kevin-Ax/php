<?php

Class Garrafa{
    public $capacity;
    public $type;
    private $isOpen;
    private $isEmpty;

    public function drink(){
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

    public function showType(){
        echo "Garrafa de $this->type. <br>";
    }

    public function open(){
        echo "Abrindo garrafa <br>";
        $this->isOpen=true;
    }

    public function close(){
        echo "Fechando garrafa <br>";
        $this->isOpen=false;
    }

    public function emp(){
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