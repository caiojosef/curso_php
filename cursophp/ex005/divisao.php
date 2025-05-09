<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="dividendo">Dividendo</label>
        <input type="number" name="dividendo" id="" min="0" value="<?=$dividendo?>">
        <label for="divisor">Divisor</label>
        <input type="number" name="divisor" id="" min="1" value="<?=$dividendo?>">
        <input type="submit" value="Calcular">
    </form>
    </main>

    <section>
        <h2>Estrutura da divisão</h2>
            <table class="divisao">
                <tr>
                    <td><?=$dividendo?></td>
                    <td><?=$divisor?></td>
                </tr>
                <tr>
                    <td><?=$dividendo % $divisor?></td>
                    <td><?=intdiv($dividendo, $divisor)?></td>
                </tr>
            </table>

        <!--?php 
        echo "O dividendo é <strong> $dividendo </strong> <br> O divisor é o <strong> $divisor </strong> <br> O resto é <strong>". ($dividendo % $divisor) . "</strong> <br> O resultado é <strong>" . number_format($dividendo / $divisor, 0) . "</strong>";
        ?-->
    </section>
</body>
</html>