<?php

require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao
{
    private $espectador;
    private $filme;

    public function __construct($espectador, $filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido + 1);
    }

    public function avaliar()
    {
    }

    public function avaliarNota()
    {
    }

    public function avaliarPorc()
    {
    }

    public function getEspectador()
    {
        return $this->espectador;
    }

    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;
        return $this;
    }

    public function getFilme()
    {
        return $this->filme;
    }

    public function setFilme($filme)
    {
        $this->filme = $filme;
        return $this;
    }
}