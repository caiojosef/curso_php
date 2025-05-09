<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <?php 
        $num = $_GET['number'] ?? 0;
        $raiz = sqrt($num);
        $raizCub = pow($num, 1/3);
    ?>
    <h1>Informe um número</h1>
    <main>
        <section>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="number">Número:</label>
            <input type="number" name="number" id="idnumber" min="0" value="<?=$num?>" >
            <input type="submit" value="Enviar">        
        </form>
        </section>

        <section>
            <h2>
                Resultado Final
            </h2>
            <p>Analisando o número <strong><?=$num?></strong>, temos:</p>
            <ul>
                <li>
                    A raiz quadrada é <strong><?=number_format($raiz, 3, ",", ".")?></strong>
                </li>
                <li>
                    A raiz cúbica é <strong><?=number_format($raizCub, 3, ",", ".")?></strong>
                </li>
            </ul>
            
        </section>
    </main>    

</body>
</html>