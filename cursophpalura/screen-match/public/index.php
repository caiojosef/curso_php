<?php

require __DIR__ . "./src/funcoes.php";

echo "Bem-vindo(a) ao screen match\n";

$nomeFilme = "Top Gun - Mavrick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$somaDeNotas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPLano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "\nNome do filme: " . $nomeFilme;
echo "\nNota do filme: " . number_format($notaFilme, 2);
echo "\nAno de Lançamento: " . $anoLancamento;


$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "genero desconhecido",
};

echo "\nO genero do filme é $genero";


$filme = criaFilme("Thor: Ragnarok", 2021, 7.8, "super-herói");

echo "\n" . $filme['ano'];

exibeMensagemLancamento($anoLancamento);
incluidoNoPlano(false, 2020);


sort($notas); //ordena itens de um array
var_dump($notas);
echo min($notas) . "\n"; //menor número da array

var_dump($filme['nome']);
echo "\n";
$posicaoDoisPontos = strpos($filme['nome'], ":"); //buscando em nome os : 
var_dump($posicaoDoisPontos);
var_dump(substr($filme['nome'], 0, $posicaoDoisPontos)); //extraindo do vetor filme, na parte nome, a partir de onde e até aonde eu quero pegar.

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);


