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
    require_once 'interface/teste.php';

    class ControleRemoto implements Controlador
    {

        private int $volume;
        private bool $ligado;
        private bool $tocando;

        public function __construct()
        {
            $this->setVolume(50);
            $this->setLigado(false);
            $this->setTocando(false);
        }
        private function getVolume()
        {
            return $this->volume;
        }


        private function setVolume($volume): int
        {
            return $this->volume = $volume;
        }


        private function getLigado()
        {
            return $this->ligado;
        }


        private function setLigado($ligado): bool
        {
            return $this->ligado = $ligado;
        }


        private function getTocando()
        {
            return $this->tocando;
        }

        private function setTocando($tocando): bool
        {
            return $this->tocando = $tocando;
        }

        public function ligar()
        {
            $this->setLigado(true);
        }
        public function desligar()
        {
            $this->setLigado(False);
        }
        public function abrirMenu()
        {
            echo "<br> Está ligado? " . ($this->getLigado() ? "SIM" : "NÃO");
            echo "<br> Está Tocando? " . ($this->getTocando() ? "SIM" : "NÃO");
            echo "<br> Volume:  " . ($this->getVolume());
            for ($i = 0; $i <= $this->getVolume(); $i += 10) {
                echo "|";
            }
        }
        public function fecharMenu()
        {
            echo "<br> Fechando Menu...";
        }
        public function maisVolume()
        {
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() + 5);
            }
        }
        public function menosVolume()
        {
            if ($this->getVolume()) {
                $this->setVolume($this->getVolume() - 1);
            }
        }
        public function ligarMudo()
        {
            if ($this->getLigado() && $this->getVolume() > 0) {
                $this->setVolume(0);
            }
        }
        public function desligarMudo()
        {
            if ($this->getLigado() && $this->getVolume() == 0) {
                $this->setVolume(50);
            }
        }
        public function play() {}
        public function pause() {}
    }
    $c = new ControleRemoto;
    $c->ligar();
    $c->maisVolume();
    $c->abrirMenu();
    ?>
    </pre>

    <h1>Projeto Controle Remoto</h1>

</body>

</html>