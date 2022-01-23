<?php

class ContaBanco {
    private $numConta;
    private $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function ContaBanco($n=00000000, $t="Poupança", $d=" ", $s=0, $st="fechada"){    //construtor da classe;
        $this->numConta=$n;
        $this->tipo=$t;
        $this->dono=$d;
        $this->saldo=$s;
        $this->status=$st;
    }

    public function getNumConta(){
        return $this->numConta;
    }

    public function setNumConta($newNumConta){
        $this->numConta=$newNumConta;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($newTipo){
        $this->tipo=$newTipo;
    }

    public function getDono(){
        return $this->dono;
    }

    public function setDono($newDono){
        $this->dono=$newDono;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($newSaldo){
        $this->saldo=$newSaldo;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($newStatus){
        $this->status=$newStatus;
    }

    public function depositar($money){
        if($this->status=="ABERTA"){
            $this->setSaldo($this->getSaldo()+$money);
        }
    }

    public function sacar($money){
        if($this->getStatus()=="ABERTA"){
            if($this->getSaldo() >= $money){
                $this->setSaldo($this->getSaldo()-$money);
            }else{
                echo "Impossível sacar! Saldo da conta de {$this->dono} inferior ao do saque. <br>";
            }
        }else{
            echo "A conta de {$this->getDono()} está fechada! Impossivel sacar. <br>";
        }
    }

    public function mostraDados(){
        echo "CONTA " . $this->getStatus() . " - dono: " . $this->getDono() . " Número da conta: " . $this->getNumConta() . " Tipo da conta: " . $this->getTipo() . " Saldo: " . $this->getSaldo() . "<br>";
    }

    public function fecharConta(){
        if($this->getSaldo()>0){
            echo "Não pode fechar a conta de {$this->getDono()}, primeiro, deve sacar o dinheiro que há nela! <br>";
        }elseif($this->getSaldo()<0){
            echo "Não pode fechar a conta de {$this->getDono()}, primeiro, deve pagar o dinheiro que deve! <br>";
        }else{
            $this->setStatus("FECHADA");
            echo "A conta de {$this->getDono()} foi fechada! <br>";
        }
    }

    public function abrirConta(){
        $this->setStatus("ABERTA");
        echo "A conta de {$this->getDono()} foi aberta! <br>";
    }
}
?>