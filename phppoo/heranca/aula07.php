<?php

?>
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

    abstract class Pessoa
    {
        private $nome;
        private $idade;
        private $sexo;

        public function __construct($nome, $idade, $sexo)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        final public function fazerAniversario()
        {
            $this->idade++;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            return $this->nome = $nome;
        }

        public function getIdade()
        {
            return $this->idade;
        }

        public function setIdade($idade)
        {
            return $this->idade = $idade;
        }

        public function getSexo()
        {
            return $this->sexo;
        }

        public function setSexo($sexo)
        {
            return $this->sexo = $sexo;
        }
    }

    class Visitante extends Pessoa
    {
        public function __construct($nome, $idade, $sexo)
        {
            parent::__construct($nome, $idade, $sexo);  // Passa os parâmetros necessários
        }
    }

    class Aluno extends Pessoa
    {
        private $matricula;
        private $curso;


        public function pagarMensalidade()
        {
            echo "<br> Pagando Mensalidade! <br>";
        }

        public function getMatricula()
        {
            return $this->matricula;
        }

        public function setMatricula($matricula)
        {
            return $this->matricula = $matricula;
        }

        public function getCurso()
        {
            return $this->curso;
        }

        public function setCurso($curso)
        {
            return $this->curso = $curso;
        }
    }

    class Bolsista extends Aluno
    {
        private $bolsa;


        public function renovarBolsa() {}
        

        public function pagarMensalidade() {
            echo "<p>" .  $this->getNome() . " é Bolsista! Então paga com desconto. <br>";
        }

        public function getBolsa()
        {
            return $this->bolsa;
        }

        public function setBolsa($bolsa)
        {
            return $this->bolsa = $bolsa;
        }
    }
    $v1 = new Visitante("Juvenal", 33,  "M");
    print_r($v1);

    $a1 = new ALuno("Pedro", 22, "M");
    $a1->setMatricula(11111);
    $a1->setCurso("Informatica");
    $a1->pagarMensalidade();
    print_r($a1);

    $b1 = new Bolsista("Carol", 32, "F");
    $b1->setMatricula(1222);
    $b1->setBolsa(12.5);
    $b1->setCurso("Enfermagem");
    $b1->pagarMensalidade();
    print_r($b1);

    ?>
</pre>
</body>

</html>