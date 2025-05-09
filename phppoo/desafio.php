<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <pre>
    <?php


    require_once './Functions/Pessoa.php';
    require_once './Functions/Livro.php'; // Certifique-se de que o caminho esteja correto
    
    $p1 = new Pessoa("Maria", 31, "F");
    
  
    echo $p1->getNome();
      $p2 = new Pessoa("Maria", 31, "F");



    $l1 = new Livro("Harry Potter", "José da Silva", 400, $p1);
    $l2 = new Livro("Harry Potter", "José da Silva", 400, $p2);
    

    // Aqui estamos chamando o método corretamente
    $l1->detalhes();
    echo $l1->getTitulo();
    $l1->fechar();

    ?>

    </pre>

</body>

</html>