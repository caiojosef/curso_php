<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Superglobais</title>
</head>

<body>
    <main>
        <pre>
            <?php
            $_SESSION = "teste";
            setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

            echo "Superglobal _GET<br>";
            var_dump($_GET);

            echo "<br>Superglobal _POST<br>";
            var_dump($_POST);

            echo "<br>Superglobal _REQUEST<br>";
            var_dump($_REQUEST);

            echo "<br>Superglobal _COOKIE<br>";
            var_dump($_COOKIE);

            echo "<br>Superglobal _SESSION<br>";
            var_dump($_SESSION);

            echo "<br>Superglobal _ENV<br>";
            var_dump($_ENV);

            // foreach(getenv() as $c => $v){
                //     echo "<br> $c -> $v"; 
                // }
                
            echo "<br>Superglobal _SERVER<br>";
            var_dump($_SERVER);
            ?>
        </pre>
    </main>
</body>

</html>