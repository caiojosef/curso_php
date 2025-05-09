<?php

function exibeMensagemLancamento(int $ano): void
{
    if ($ano > 2022) {
        echo "\nesse filme é um lançamento";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "\nEsse filme ainda é novo";
    } else {
        echo "\nEsse filme não é um lançamento";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool
{
    return $planoPrime || $anoLancamento < 2020;
}

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero): Filme {

    $filme = new Filme();
    $filme->nome = $nome;
    $filme->anoLancamento = $anoLancamento;
    $filme->nota = $nota;

    return $filme;
}
