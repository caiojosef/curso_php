<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php
    require_once 'Video.php';
    require_once 'Gafanhoto.php';
    require_once 'visualizacao.php';
    
    $v[0] = new Video("Aula 01 de POO");
    $v[1] = new Video("Aula 01 de PHP");
    $v[2] = new Video("Aula 15 de JAVA");
    print_r($v);


    $g[0] = new Gafanhoto("Igris", 20, "M", "tadeu");
    $g[1] = new Gafanhoto("Teodora", 22, "F", "teodorinha");
    print_r($g); 

    $vis[0] = new Visualizacao($g[0], $v[0]);
    $vis[1] = new Visualizacao($g[0], $v[2]);

    print_r($vis);
    ?>

    </pre>
</body>

</html>