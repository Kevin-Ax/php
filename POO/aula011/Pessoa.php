<?php

abstract class Pessoa{  //classe abstrata
    private $name;
    private $age;
    private $gender;

    public function Pessoa($n="Jorge", $a=0, $g="M"){
        $this->name=$n;
        $this->age=$a;
        $this->gender=$g;
    }

    public function getName(){
        return $this->name;
    }

    protected function setName($newName){
        $this->name=$newName;
    }

    public function getAge(){
        return $this->age;
    }

    protected function setAge($newAge){
        $this->age=$newAge;
    }

    public function getGender(){
        return $this->gender;
    }

    protected function setGender($newGender){
        $this->gender=$newGender;
    }

    public final function birthDay(){   //método final;
        $this->setAge($this->getAge()+1);
    }
}

?>