<?php
require_once "Aluno.php";

final Class Bolsista extends Aluno{
    private $bolsa;
    private $validade;

    public function Aluno($n=0, $a=0, $g=0, $m=0, $d=0, $b=0, $v=0){
        $this->setName($n);
        $this->setAge($a);
        $this->setGender($g);
        $this->setMatNum($m);
        $this->setDiscp($d);
        $this->setBolsa($b);
        $this->setValidade($v);
        $this->setMensal(250);
    }

    public function getBolsa(){
        return $this->bolsa;
    }
    protected function setBolsa($newBolsa){
        $this->bolsa=$newBolsa;
    }

    public function getValidade(){
        return $this->validade;
    }
    protected function setValidade($newValidade){
        $this->validade=$newValidade;
    }

    public function renovaBolsa(){
        $this->setValidade($this->getValidade()+12);
    }

    public function payMensal(){
        if($this->getBolsa() > $this->getMensal()){
            echo "A bolsa cobre a mensalidade, então mensalidade paga automáticamente. <br>";
        }else{
            $dif = $this->getMensal() - $this->getBolsa();
            echo "Pagando mensalidade de R$ $dif do(a) {$this->getName()}. <br>";
        }
    }
}

?>