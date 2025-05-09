<?php 

$filme = [
    'nome' => $_GET['nome'],
    'ano' => $_GET['ano'],
    'nota' => $_GET['nota'],
    'genero' => $_GET['genero'],
];


file_put_contents('filmes.json', json_encode($filme));

header('Location: ./sucesso.php?filmes='. $filme['nome']);

?>