<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário retroalimentado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        //capturando dados do formulário retroalimentado
        $valor1 = $_GET['valor1'] ?? 0;
        $valor2 = $_GET['valor2'] ?? 0;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" id="" value="<?=$valor1?>">
            <label for="valor2">Valor 2</label>
            <input type="number" name="valor2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section>
        <h2>Resultado da Soma</h2>
        <?php 
            echo "O resultado é <strong>" . $valor1 + $valor2 . "</strong>"
        ?>
    </section>
    
</body>
</html>