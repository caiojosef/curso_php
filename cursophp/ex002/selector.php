<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seletor de Número</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
        <header>
            <h1>
                Resultado do processamento: 
            </h1>
        </header>

        <main>
            <?php 
            $number = $_REQUEST["number"] ?? "Sem número";

            echo "<p> O número selecionado foi: " . $number . "<br> Seu número antecessor é " . ($number - 1) . "<br> Seu sucessor é " . ($number + 1);
            echo "<br>";
            ?>
            <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
            
        </main>
</body>
</html>