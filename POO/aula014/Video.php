<?php
require_once "AcoesVideo.php";

class Video implements AcoesVideo{
    private $titulo;
    private $avaliacao;
    private $views;
    private $likes;
    private $reprozindo;

    public function Video($t, $a=1, $v=0, $l=0, $r=false){
        $this->titulo=$t;
        $this->avaliacao=$a;
        $this->views=$v;
        $this->likes=$l;
        $this->reprozindo=$r;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($newTitulo){
        $this->titulo=$newTitulo;
    }

    public function getAvaliacao(){
        return $this->avaliacao;
    }

    public function setAvaliacao($newAvaliacao){
        $aux=$this->getAvaliacao()+$newAvaliacao;
        $aux/=$this->getViews();
        $this->avaliacao=$aux;
    }

    public function getViews(){
        return $this->views;
    }

    public function setViews($newViews){
        $this->views=$newViews;
    }

    public function getLikes(){
        return $this->likes;
    }

    public function setLikes($newLikes){
        $this->likes=$newLikes;
    }

    public function isReproduzindo(){
        return $this->reproduzindo;
    }

    private function setReproduzindo($newRP){
        $this->reproduzindo=$newRP;
    }

    public function play(){
        $this->setReproduzindo(true);
    }

    public function pause(){
        $this->setReproduzindo(false);
    }

    public function like(){
        $newl=$this->getLikes()+1;
        $this->setLikes($newl);
    }

    public function visto(){
        $this->setViews($this->getViews()+1);
    }
}

?>