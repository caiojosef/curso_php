<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
        <?php

        class Luta
        {
            private Lutador $desafiado;
            private Lutador $desafiante;
            private $rounds;
            private $aprovada;

            public function marcarLuta($l1, $l2) {
                if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
                    $this->aprovada = true;
                    $this->desafiado = $l1;
                    $this->desafiante = $l2;
                } else {
                    $this->aprovada = false;
                    $this->desafiado = NULL;
                    $this->desafiante = NULL;
                }

            }

            public function lutar() {
                if($this->aprovada){
                    $this->desafiado->apresentar();
                    $this->desafiante->apresentar();
                    $vencedor = rand(0,2);
                    switch($vencedor){
                        case 0:
                            echo "<p>Empate!</p>";
                            $this->desafiado->empatarLuta();
                            $this->desafiante->empatarLuta();
                            break;
                        case 1:
                            echo "<p>" . $this->desafiado->getNome() ." venceu</p>";
                            $this->desafiado->ganharLuta();
                            $this->desafiante->perderLuta();
                            break;
                        case 2:
                            echo "<p>" . $this->desafiante->getNome() ." venceu</p>";
                            $this->desafiado->perderLuta();
                            $this->desafiante->ganharLuta();
                            break;
                    }
                }else{
                    echo"<p>Luta não pode acontecer";
                }
            }

            public function setDesafiado ($desafiado){
                return $this->desafiado = $desafiado;
            }
            public function getDesafiado (){
                return $this->desafiado;
            }
            public function setDesafiante ($desafiante){
                return $this->desafiante = $desafiante;
            }
            public function getDesafiante (){
                return $this->desafiante;
            }
        }

        class Lutador
        {
            private  $nome;
            private  $nacionalidade;
            private  $idade;
            private  $altura;
            private  $peso;
            private  $categoria;
            private  $vitorias;
            private  $derrotas;
            private  $empates;

            function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
            {
                $this->nome = $no;
                $this->nacionalidade = $na;
                $this->idade = $id;
                $this->altura = $al;
                $this->setpeso($pe);
                $this->vitorias = $vi;
                $this->derrotas = $de;
                $this->empates = $em;
            }


            public function apresentar()
            {
                echo "----------------------------";
                echo "<br>Lutador: " . $this->getNome();
                echo "Origem: " . $this->getNacionalidade();
                echo "<br>" . $this->getIdade() . " anos";
                echo "<br>" . $this->getAltura() . " m de altura";
                echo "<br>Pesando: " . $this->getPeso();
                echo "<br>Ganhou: " . $this->getVitorias();
                echo "<br>Perdeu: " . $this->getDerrotas();
                echo "<br>Empatou: " . $this->getEmpates();
            }
            public function status()
            {
                echo $this->getNome();
                echo " é um peso " . $this->getCategoria();
                echo $this->getVitorias() . " Vitórias";
                echo $this->getDerrotas() . " Derrotas";
                echo $this->getEmpates() . " Empates";
            }
            public function ganharLuta()
            {
                $this->setVitorias($this->getVitorias() + 1);
            }
            public function perderLuta()
            {
                $this->setDerrotas($this->getDerrotas() + 1);
            }
            public function empatarLuta()
            {
                $this->setEmpates($this->getEmpates() + 1);
            }
            public function getNome()
            {
                return $this->nome;
            }
            public function setNome($no)
            {
                return $this->nome = $no;
            }
            public function getNacionalidade()
            {
                return $this->nacionalidade;
            }
            public function setNacionalidade($na)
            {
                return $this->nacionalidade = $na;
            }
            public function getIdade()
            {
                return $this->idade;
            }
            public function setIdade($id)
            {
                return $this->idade = $id;
            }
            public function getAltura()
            {
                return $this->altura;
            }
            public function setAltura($al)
            {
                return $this->altura = $al;
            }
            public function getPeso()
            {
                return $this->peso;
            }
            public function setPeso($pe)
            {
                $this->peso = $pe;
                $this->setCategoria();
            }
            public function getCategoria()
            {
                return $this->categoria;
            }
            private function setCategoria()
            {
                if ($this->peso < 52.2) {
                    $this->categoria = "Inválida";
                } elseif ($this->peso <= 70.3) {
                    $this->categoria = "Leve";
                } elseif ($this->peso <= 83.9) {
                    $this->categoria = "Médio";
                } elseif ($this->peso <= 120.2) {
                    $this->categoria = "Pesado";
                } else {
                    $this->categoria = "Inválido";
                }
            }
            public function getVitorias()
            {
                return $this->vitorias;
            }
            public function setVitorias($vi)
            {
                return $this->vitorias = $vi;
            }
            public function getDerrotas()
            {
                return $this->derrotas;
            }
            public function setDerrotas($de)
            {
                return $this->derrotas = $de;
            }
            public function getEmpates()
            {
                return $this->empates;
            }
            public function setEmpates($em)
            {
                return $this->empates = $em;
            }
        }
        $lutador1 = array();
        $lutador1[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 1);
        $lutador1[0]->perderLuta();
        $lutador1[0]->status();
        $lutador1[0]->apresentar();

        $lutador1[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        echo "<br>";

        $uec01 = new Luta();
        $uec01->marcarLuta($lutador1[0],$lutador1[1]);
        $uec01->lutar();

        ?>
    </pre>


</body>

</html>