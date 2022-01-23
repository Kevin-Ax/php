<?php
require_once "Video.php";
require_once "Gafanhoto.php";

class Vizualizaçao{
    private $espectador;
    private $video;

    public function Vizualizaçao($e, $v){
        $this->setEspectador($e);
        $this->setVideo($v);
        $this->getEspectador()->verMaisUm();
        $this->getVideo()->visto();
        $this->getVideo()->like();
    }

    public function getEspectador(){
        return $this->espectador;
    }

    public function setEspectador($newE){
        $this->espectador=$newE;
    }

    public function getVideo(){
        return $this->video;
    }

    public function setVideo($newV){
        $this->video=$newV;
    }

    public function avaliar(){
        echo "O espectador {$this->getEspectador()->getNome()} deu uma nota 3 para o video {$this->getVideo()->getTitulo()} . <br>";
        $this->getVideo()->setAvaliacao(3);
    }

    public function avaliarNota($nota){
        echo "O espectador {$this->getEspectador()->getNome()} deu uma nota $nota para o video {$this->getVideo()->getTitulo()} . <br>";
        $this->getVideo()->setAvaliacao($nota);
    }

    public function avaliarPercent($percent){
        echo "O espectador {$this->getEspectador()->getNome()} deu $percent% de avaliação para o video {$this->getVideo()->getTitulo()} . <br>";
        $nota = (10*$percent)/100;
        $this->getVideo()->setAvaliacao($nota);
    }
}

?>