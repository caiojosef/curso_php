<?php

require_once 'Pessoa.php';

class Professor extends Pessoa
{
    private $especialidade;
    private $salario;

    public function receberAum($aum):float
    {
       return $this->salario += $aum;
    }

    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade)
    {
        return $this->especialidade = $especialidade;
        
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        return $this->salario = $salario;
        
    }
}