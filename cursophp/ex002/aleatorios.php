<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número aleatório</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Número aleatório</h1>
    </header>
    <main>
        <?php 
            $number1 = $_REQUEST["number1"];
            $number2 = $_REQUEST["number2"];

            echo "O número gerado aleatoriamente entre o $number1 e o $number2 foi: " . rand($number1, $number2);
        ?>
    <br>
    <a href="javascript:window.location.reload();">Atualizar página</a>
    </main>
</body>
</html>