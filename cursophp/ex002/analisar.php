<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisar o HTML</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
        <h1>Analisando Número real</h1>
    <main>

    <?php 
        $num = $_POST["din"] ?? 0;

        echo "<p> Analisando o Número <strong>" . number_format($num, 3, ",", "."). "</strong> informado pelo usuário </p>";

        $int = (int) $num ;
        $fra =  $num - $int;

        echo "<ul> <li> A parte inteira do número é <strong>" .number_format($int, 0, ",", "."). " </strong></li>";

        echo "<li> A parte inteira do número é <strong>" .number_format($fra, 3, ",", "."). " </strong></li> </ul> ";
    ?>
    <button onclick="javascript:history.go(-1)"> Voltar </button>
    </main>
</body>
</html>