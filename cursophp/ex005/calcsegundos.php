<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de segundos</title>
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <?php
    $segundos = $_REQUEST['segundos'];
    $tempoSegundos = 3600;
    $tempoMinutos = 60;
    

    ?>

    <main>
        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="segundos">Qual é o total de segundos?</label>
                <input type="number" name="segundos" id="" min="0" value="<?=$segundos?>">
                <input type="submit" value="Calcular">
            </form>
        </section>

        <section>
            <h2>Totalizando tudo</h2>
            <p>Analisando o valor que você digitou, <strong><?= number_format($segundos, 3,".",".")?></strong> equivalem a um total de: </p>
            <ul>
                <li><?= (int) ($segundos)?></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </section>
    </main>
</body>

</html>