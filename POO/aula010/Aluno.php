<?php
require_once "Pessoa.php";

Class Aluno extends Pessoa {
    private $matNum;
    private $discp;

    public function Aluno($n=0, $a=0, $g=0, $m=0, $d=0){
        $this->setName($n);
        $this->setAge($a);
        $this->setGender($g);
        $this->setMatNum($m);
        $this->setDiscp($d);
    }

    public function getMatNum(){
        return $this->matNum;
    }

    public function setMatNum($newMatNum){
        $this->matNum=$newMatNum;
    }

    public function getDiscp(){
        return $this->discp;
    }

    public function setDiscp($newDiscp){
        $this->discp=$newDiscp;
    }

    public function cancelMat(){
        if($this->getMatNum()==0){
            echo "Matricula já cancelada. <br>";
        }else{
            $this->setMatNum(0);
            echo "Matricula cancelada com sucesso! <br>";
        }
    }
}

?>