<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php
    $salarioMin = (float)1518;
    $salario = $_GET['salario'] ?? 0;

    ?>

    <h1>Divisão de salário</h1>

    <main>
        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="salario">Informe seu salário:</label>
                <input type="number" name="salario" id="idsalario" min="0" value="<?= $salario ?>" step="0.01">
                <input type="submit" value="Calcular">

                <p>O salário minímo é de <strong>R$<?= number_format($salarioMin, 2, ",", ".") ?> </strong> </p>

            </form>
        </section>
        <section>
            <h2>Resultado Final</h2>
            <?php
            echo "Quem recebe um salário de R$ $salario, ganha <strong>" . number_format($salario / $salarioMin, 2) . "</strong> salários mínimos + R$ " . number_format($salario % $salarioMin, 2, ",", ".");
            ?>
        </section>
    </main>

</body>

</html>