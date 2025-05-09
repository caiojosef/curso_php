<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Funcionario.php';
        require_once 'Professor.php';
        require_once 'Aluno.php';
            $p1 = new Pessoa("Mario", 31, "M");
            $p2 = new Aluno("José", 19, "M");
            $p3 = new Professor("Maria", 30, "F");
            $p4 = new Funcionario("Ernestina", 32, "F");
        
            $p1->setNome("Ernesto");
            $p2->setCurso("Informática");
            $p3->setSalario(2500.75);
            $p3->receberAum(550.20);
            $p4->setTrabalhando("Compras");
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
            
        ?>
    </pre>
</body>
</html>