<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento do valor</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <?php
    $valorProd = $_REQUEST['valor'] ?? 0;
    $reajusteProd = $_REQUEST['ajuste'];
    ?>

    <h1>Reajustador de preços</h1>
    <main>
        <section>

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="produto">Preço do Produto (R$):</label>
                <input type="number" name="valor" id="" min="0" value="<?= $valorProd ?>" step="0.01">
                <label for="ajuste">Qual será o percentual de reajuste? (<strong><span id="p"></span>%</strong>)</label>
                <input type="range" name="ajuste" id="ajuste" min="0" max="100" oninput="mudaValor()">

                <input type="submit" value="Reajustar">
            </form>
        </section>

        <section>
            <h2>Resultado do Reajuste:</h2>
            <p>O Produto que custava R$<?= $valorProd ?>, com o <strong><?= $reajusteProd ?>% de aumento</strong> vai passar a custar <strong>R$<?= number_format(($valorProd * $reajusteProd) / 100 + $valorProd, 2, ",", ".") ?></strong></p>
        </section>
    </main>
    <script>
        mudaValor();
        //declarações automáticas
        function mudaValor() {
            p.innerText = ajuste.value;
        };
    </script>

</body>

</html>