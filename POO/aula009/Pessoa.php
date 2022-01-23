<?php

Class Pessoa{
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

    public function setName($newName){
        $this->name=$newName;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($newAge){
        $this->age=$newAge;
    }

    public function getGender(){
        return $this->gender;
    }

    public function setGender($newGender){
        $this->gender=$newGender;
    }

    public function birthDay(){
        $this->setAge($this->getAge()+1);
    }
}

?>