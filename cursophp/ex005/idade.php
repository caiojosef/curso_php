<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de idade</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>


    <?php
    $data = date("Y");
    $anoNascimento = $_GET['nascimento'] ?? 0;
    //            var_dump($_SERVER);
    $calcAno = $_GET['ano'] ?? 0;
    ?>

    <main>
        <section>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                <label for="nascimento">Em qual ano você nasceu?</label>
                <input type="number" name="nascimento" id="" value="<?= $anoNascimento?>" min="0">
                <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?= $data ?></strong>)</label>
                <input type="number" name="ano" id="" min="0" value="<?= $calcAno?>">
                <input type="submit" value="Calcular">
            </form>
        </section>

        <section>
            <h2>Resultado</h2>
            <p>Quem nasceu em <?= $anoNascimento?> vai ter <?= $calcAno - $anoNascimento ?> </p>
        </section>
    </main>

</body>

</html>