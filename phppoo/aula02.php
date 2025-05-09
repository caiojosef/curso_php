<?php
class Caneta
{
    private $modelo;
    private $cor;
    public $ponta;
    public $tampada;

    public function __construct($m, $c, $p)
    { //método construtor
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }


    public function tampar()
    {
        $this->tampada = true;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($m)
    {
        $this->modelo = $m;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setcor($c)
    {
        $this->modelo = $c;
    }

    public function getPonta()
    {
        return $this->ponta;
    }

    public function setPonta($p)
    {
        $this->ponta = $p;
    }
}

$c1 = new Caneta("BIC", "Azul", 0.5);
$c2 = new Caneta("KK", "Verde", 1);

print_r($c1);

echo "<br>";

print_r($c2);
