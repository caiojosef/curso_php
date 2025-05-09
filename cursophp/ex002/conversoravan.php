<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Avançado</title>
    
</head>
<body>
    <main>

    <?php 

    $inicio = date("m-d-Y", strtotime("-7days"));
    $fim = date("m-d-Y");
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);
    //var_dump($dados);

    $cotacao = $dados["value"][0]["cotacaoCompra"];

    $real = $_REQUEST["din"];

    $dolar = $real / $cotacao;

    echo "Você tem R$" . $real . "<br> Convertendo para o dólar você possui U$" . number_format($dolar, 2);
    ?>

    </main>


    
</body>
</html>