<?php
require_once "Capa.php";
require_once "Pessoa.php";

Class Livro implements Capa{
    private $tittle;
    private $author;
    private $totPage;
    private $actualPage;
    private $isOpen;
    private $reader;

    public function Livro($t="HP", $a="KJ Rolling", $tp=235, $ap=0, $io=false, $r){
        $this->tittle=$t;
        $this->author=$a;
        $this->totPage=$tp;
        $this->actualPage=$ap;
        ($this->actualPage>$this->totPage)?$this->actualPage=$this->totPage:$this->actualPage=$ap;
        $this->isOpen=$io;
        $this->reader=$r;
    }

    private function getTittle(){
        return $this->tittle;
    }

    private function setTittle($newTittle){
        $this->tittle=$newTittle;
    }

    private function getAuthor(){
        return $this->author;
    }

    private function setAuthor($newAuthor){
        $this->author=$newAuthor;
    }

    private function getTotPage(){
        return $this->totPage;
    }

    private function setTotPage($newTotPage){
        $this->totPage=$newTotPage;
    }

    private function getActualPage(){
        return $this->actualPage;
    }

    private function setActualPage($newActualPage){
        $this->actualPage=$newActualPage;
    }

    private function getIsOpen(){
        return $this->isOpen;
    }

    private function setIsOpen($newIsOpen){
        $this->isOpen=$newIsOpen;
    }

    private function getReader(){
        return $this->reader->getName();
    }

    private function setReader($newReader){
        $this->reader=$newReader;
    }

    public function detals(){
        echo "Livro: {$this->getTittle()} <br>
        Autor: {$this->getAuthor()} <br>
        Número de páginas: {$this->getTotPage()} <br>
        Página atual: {$this->getActualPage()} <br>
        Livro está aberto? " ;
        ($this->getIsOpen())? $i= "Sim.":$i="Não";
        echo "$i <br>";
        echo "Leitor: {$this->getReader()} <br>";
    }

    public function open(){
        $this->setIsOpen(true);
    }

    public function close(){
        $this->setIsOpen(false);
    }

    public function overview(){
        if($this->getIsOpen()){
            echo "Foleando livro... <br>";
            echo "{$this->getTittle()}, o autor(a) é {$this->getAuthor()} e tem {$this->getTotPage()} páginas. <br>";
        }else{
            echo "O livro está fechado, abra o livro primeiro. <br>";
        }
    }

    public function passPage(){
        if($this->getIsOpen()){
            if($this->getActualPage() < $this->getTotPage()){
                $this->setActualPage($this->getActualPage()+1);
            }else{
                echo "O livro terminou. <br>";
            }
        }else{
            echo "O livro está fechado, abra o livro primeiro. <br>";
        }    
    }

    public function backPage(){
        if($this->getIsOpen()){
            if($this->getActualPage() > 0){
                $this->setActualPage($this->getActualPage()-1);
            }else{
                echo "Já está no começo do livro. <br>";
            }    
        }else{
            echo "O livro está fechado, abra o livro primeiro. <br>";
        }
    }
}

?>