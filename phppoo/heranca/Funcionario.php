<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa
{
    private $setor;
    private $trabalhando;

    public function mudarTrabalho()
    {
        $this->trabalhando = ! $this->trabalhando;
    }

    public function getSetor()
    {
        return $this->setor;
    }

    public function setSetor($setor)
    {
        $this->setor = $setor;
        return $this;
    }

    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    public function setTrabalhando($trabalhando)
    {
        return $this->trabalhando = $trabalhando;
    }
}
