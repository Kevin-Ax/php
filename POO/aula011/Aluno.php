<?php
require_once "Pessoa.php";

Class Aluno extends Pessoa {
    private $matNum;
    private $discp;
    private $mensal;

    public function Aluno($n=0, $a=0, $g=0, $m=0, $d=0){
        $this->setName($n);
        $this->setAge($a);
        $this->setGender($g);
        $this->setMatNum($m);
        $this->setDiscp($d);
        $this->mensal=250;
    }

    public function getMatNum(){
        return $this->matNum;
    }

    protected function setMatNum($newMatNum){
        $this->matNum=$newMatNum;
    }

    public function getDiscp(){
        return $this->discp;
    }

    protected function setDiscp($newDiscp){
        $this->discp=$newDiscp;
    }

    public function getMensal(){
        return $this->mensal;
    }

    protected function setMensal($newMensal){
        $this->mensal=$newMensal;
    }

    public function cancelMat(){
        if($this->getMatNum()==0){
            echo "Matricula já cancelada. <br>";
        }else{
            $this->setMatNum(0);
            echo "Matricula cancelada com sucesso! <br>";
        }
    }

    public function payMensal(){
        echo "Pagando mensalidade de R$ {$this->getMensal()} do(a) {$this->getName()}. <br>";
    }
}

?>