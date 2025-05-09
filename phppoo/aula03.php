<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=php, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    class ContaBanco
    {
        public int $numConta;
        protected string $tipo;
        private string $dono;
        private float $saldo;
        private bool $status;

        public function __construct()
        {
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "Conta criada com sucesso <br>";
        }

        public function abrirConta($t)
        {
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "CC") {
                $this->setSaldo(50);
            } elseif ($t == "CP") {
                $this->setSaldo(150);
            }
        }

        public function fecharConta()
        {

            if ($this->getSaldo() > 0) {
                echo "<br> Conta com dinheiro: R$" . $this->getSaldo();
            } elseif ($this->getSaldo() < 0) {
                echo "<br> Conta com débito";
            } else {
                $this->setStatus(false);
            }
        }

        public function depositar($v)
        {
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() + $v);
                echo "<br> Deposito de $v feito na conta de " . $this->getDono() . "<br>";
            } else {
                echo "Conta fechada";
            }
        }

        public function sacar($v)
        {
            if ($this->getStatus()) {
                if ($this->getSaldo() > $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<br>Saque de $v autorizado na conta do " . $this->getDono() . " <br>";
                } else {
                    echo "Saldo Insuficiente <br>";
                }
            } else {
                echo "Impossível sacar";
            }
        }

        public function sacarTudo()
        {
            if($this->getSaldo() > 0){
                $this->setSaldo(0);
                echo "<br>Saldo atualizado para R$". $this->getSaldo();
            }else{
                echo "Seu saldo está zerado";
            }
            
        }


        public function pagarMensal()
        {
            if ($this->getTipo() == "CC") {
                $v = 12;
            } elseif ($this->getTipo() == "CP") {
                $v = 20;
            }
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<br> Mensalidade de $v debitada da conta de " . $this->getDono();
            } else {
                echo "Problemas com a conta";
            }
        }


        function getNumConta()
        {
            return $this->numConta;
        }

        function setNumConta($numConta)
        {
            $this->numConta = $numConta;
        }

        function getTipo()
        {
            return $this->tipo;
        }

        function setTipo($t)
        {
            $this->tipo = $t;
        }
        function getDono()
        {
            return $this->dono;
        }

        function setDono($d)
        {
            $this->dono = $d;
        }
        function getSaldo()
        {
            return $this->saldo;
        }

        function setSaldo($s)
        {
            $this->saldo = $s;
        }

        private function getStatus()
        {
            return $this->status;
        }


        private function setStatus($status)
        {
            return $this->status = $status;
        }
    }

    $p1 = new ContaBanco();
    $p2 = new ContaBanco();
    $p1->abrirConta("CC");
    $p1->setNumConta(2123);
    $p1->setDono("Jubileu");
    $p2->setNumConta(111111);
    $p2->abrirConta("CP");
    $p2->setDono("Creusa");
    $p1->depositar(1500);
    $p2->depositar(1500);

    $p1->pagarMensal();
    $p2->pagarMensal();
    $p1->fecharConta();
    $p2->fecharConta();

    $p1->sacarTudo();    

    ?>
    <pre>
        <?php echo var_dump($p1) . "<br>" . var_dump($p2) ?>
    </pre>
</body>

</html>