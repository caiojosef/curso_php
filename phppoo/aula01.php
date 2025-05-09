<?php
class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar()
    {
        if ($this->tampada == true) {
            echo "Não posso rabiscar";
        } else {
            echo "Estou rabiscando";
        }
    }

    public function tampar() {
        $this->tampada = true;
    }

    public function destampar() {
        $this->tampada = false;
    }
}

//$c1 = new Caneta;
$c1->modelo = "Bic";
$c1->cor = "azul";
//$c1->ponta = "0.5";
//$c1->carga = "cheia";
//$c1->tampada = false;
$c1->destampar();
echo "<pre>";
var_dump($c1);
echo "</pre>";

$c1->rabiscar();
