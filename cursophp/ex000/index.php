<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>

<body>
    <h1>
        <!-- Quebrando a maldição  -->
        <?php
        echo "Olá, Mundo! ";
        $nome = "Caio Josef";
        echo "<p> meu nome é $nome </p>"
        ?>
    </h1>

    <!-- Trabalhando com hora/data -->
    <?php
    print("<br>");
    date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje é dia " . date("d/m/y");
    echo " e a hora atual é " . date("G:i:s")
    ?>

    <!-- Variáveis e constantes -->
    <?php
    //constante 
    const PAIS = "Brasil";
    $nome = "Caio";
    $sobrenome = "Josef";
    echo "<br>";
    echo "Prazer, $nome $sobrenome";

    $salario = 2500.75;
    $nome = "Gustavo";
    $sobrenome = "Guanabara";
    echo "<br>";
    echo "Prazer $nome $sobrenome, você mora no " . PAIS . ". Seu salário é de R$ $salario";

    /* Tipos de variáveis */

    $nomeCompleto = "camelCase";
    $telefone_contato_fornecedor = "Snake Case";

    /* Tipos primitivos */
    echo "<br>";
    echo "<h1>testes de tipos primitivos</h1>";
    $num = 300;
    $num = 0b1011;
    print "O valor é = $num";
    var_dump($num);

    echo "<br>";
    $v = (float) 500.21;
    var_dump($v);

    $casado = (false);
    var_dump($casado);
    echo "<br>";
    echo "ele é $casado";

    echo "<hr>";

    print "Vetores: <br>";

    $vet = ["Caio", 2, 3.50];
    var_dump($vet);
    
    echo "Estamos no ano de = ". date("D/M/Y");

    $nom = "Rodrigo";
    $snom = "Nogueira";

    
    echo "<br> $nom \t \"Minotauro\"\t $snom";

    $canal = "Youtube";
    $ano = date('Y');

    echo '<br>';
    echo <<< TESTE
        \n
        \n
        Olá galera do $canal
            Tudo bem com vocês?
        Como está sendo esse ano de $ano?
        Abraços! \u{1F596}
    TESTE;




    
    ?>

</body>

</html>