<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1>Resultado do processamento:</h1>
    </header>
    <main>
        <?php 
            //$_GET $_POST $_REQUEST
            //var_dump($_GET); 

            $nome = $_GET["nome"] ?? "Sem Nome";
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";

            echo "<p> é um prazer, $nome $sobrenome.</p>";
        ?>
        <a href="javascript:history.go(-1)">Voltar para a página Anterior</a>
    </main>
</body>
</html>