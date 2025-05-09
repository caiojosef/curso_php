<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Simples e Ponderada</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <?php
    $valor1 = $_GET['num1'] ?? 0;
    $valor2 = $_GET['num2'] ?? 0;
    $peso1 = $_GET['peso1'] ?? 0;
    $peso2 = $_GET['peso2'] ?? 0;

    $mediaSimples = ($valor1 + $valor2) / 2;
    $mediaPonderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2); 
        
    

    ?>
    <h1>Médias Aritméticas</h1>
    <main>
        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="num1">1º Valor</label>
                <input type="number" name="num1" id="" value="<?= $valor1 ?>">
                <label for="peso1">1º Peso</label>
                <input type="number" name="peso1" id="" value="<?= $peso1 ?>">
                <label for="num2">2º Valor</label>
                <input type="number" name="num2" id="" value="<?= $valor2 ?>">
                <label for="peso2">2º Peso</label>
                <input type="number" name="peso2" id="" value="<?= $peso2 ?>">
                <input type="submit" value="Calcular">
            </form>
        </section>

        <section>
            <h2>
                Cálculo das médias
            </h2>
            <p>Analisando os valores de <strong><?= $valor1 ?></strong> e <strong><?= $valor2 ?></strong></p>

            <ul>
                <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?= number_format($mediaSimples, 2, ",", ".") ?></li>
                <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> é igual a <?= number_format($mediaPonderada,2 ,",",".")?></li>
            </ul>
        </section>

    </main>


</body>

</html>