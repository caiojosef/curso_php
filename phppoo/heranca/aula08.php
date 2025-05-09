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

    abstract class Animal
    {
        protected $peso;
        protected $idade;
        protected $membros;

        public function __construct($peso, $idade, $membros)
        {
            $this->peso = $peso;
            $this->idade = $idade;
            $this->membros = $membros;
        }

        abstract function locomover();

        abstract function alimentar();

        abstract function emitirSom();

        public function getPeso()
        {
            return $this->peso;
        }

        public function setPeso($peso)
        {
            $this->peso = $peso;
            return $this;
        }

        public function getIdade()
        {
            return $this->idade;
        }

        public function setIdade($idade)
        {
            $this->idade = $idade;
            return $this;
        }

        public function getMembros()
        {
            return $this->membros;
        }

        public function setMembros($membros)
        {
            $this->membros = $membros;
            return $this;
        }
    }

    class Mamifero extends Animal
    {
        private $corPelo;

        public function locomover()
        {
            echo "Correndo";
        }

        public function alimentar()
        {
            echo "Mamando";
        }

        public function emitirSom()
        {
            echo "Som de mamífero";
        }

        public function getCorPelo()
        {
            return $this->corPelo;
        }

        public function setCorPelo($corPelo)
        {
            $this->corPelo = $corPelo;
            return $this;
        }
    }

    class Reptil extends Animal
    {
        private $corEscama;

        public function locomover()
        {
            echo "Rastejando";
        }

        public function alimentar()
        {
            echo "Comendo Vegetais";
        }

        public function emitirSom()
        {
            echo "Som de Reptil";
        }

        public function getCorEscama()
        {
            return $this->corEscama;
        }

        public function setCorEscama($corEscama)
        {
            $this->corEscama = $corEscama;
            return $this;
        }
    }

    class Peixe extends Animal
    {
        private $corEscama;

        public function locomover()
        {
            echo "Nadando";
        }

        public function alimentar()
        {
            echo "Comendo Substancias";
        }

        public function emitirSom()
        {
            echo "Peixe não faz som";
        }

        public function soltarBolhas()
        {
            echo "Soltou uma bolha";
        }

        public function getCorEscama()
        {
            return $this->corEscama;
        }

        public function setCorEscama($corEscama)
        {
            $this->corEscama = $corEscama;
            return $this;
        }
    }

    class Ave extends Animal
    {
        private $corPena;

        public function locomover()
        {
            echo "Voando";
        }

        public function alimentar()
        {
            echo "Comendo frutas";
        }

        public function emitirSom()
        {
            echo "Som de ave";
        }

        public function fazerNinho()
        {
            echo "Construiu um ninho";
        }

        public function getCorPena()
        {
            return $this->corPena;
        }

        public function setCorPena($corPena)
        {
            $this->corPena = $corPena;
            return $this;
        }
    }

    class Cachorro extends Mamifero{
        public function emitirSom()
        {
            echo "<br>Au AU AU<br>";
        }

        public function reagirFrase($frase){
            if($frase="toma comida" || $frase="Olá"){
                echo("Abanar e Latir");
            }else{
                echo "Rosnar";
            }
        }
        public function reagirHora($hora, $min){
            if($hora<12){
                echo "Abanar";
            }elseif($hora>=18){
                echo "Ignorar";
            }else{
                echo "Abanar e Latir";
            }

        }
        public function reagirDono($dono){
            if($dono == true){
                echo "abanar";
            }else{
                echo "Rosnar e Latir";
            }
        }
        public function reagirIdadePeso($idade, $peso){
            if ($idade < 5) {
                if ($peso < 10) {
                    echo "Abanar";
                }else {
                    echo "Latir";
                }
            }else {
                if($peso < 10){
                    echo "Rosnar";
                }else{
                    echo "Ignorar";
                }
            }   
        }

    }
    $a = new Mamifero(40, 20, 4);
    $a->setCorPelo("branco");
    print_r($a);
    $a->locomover();
    $c = new Cachorro(40, 20, 4);
    $c->emitirSom();
    print_r($c);
    $c->reagirFrase("Olá");
    $c->reagirHora(12, 11);
    $c->reagirDono(false);
    $c->reagirIdadePeso(5, 4);



    ?>
</pre>
</body>

</html>