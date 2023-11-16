<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<Header><h1>Seu número aléatorio de 0 a 1000 é:</h1></Header>
    <?php 

        $inicio_data = date("m-d-Y", strtotime("-7 days"));
        $fim_data = date("m-d-Y");



        $api = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio_data .'\'&@dataFinalCotacao=\''.$fim_data.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($api), true);

        $valor_real = $_GET["valor"];
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $resultado = $valor_real / $cotacao;
        $resultado_formatado = number_format($resultado, 2);
        echo "<div class='container'>" . "<p> " . "R$" . number_format($valor_real, 2, ",", ".") . " vale R$" . $resultado_formatado . " em dólares usando a cotação da API do Banco Central</p> </div>
        "

       
    ?>
    <div class="container"> 
        <button onclick="javascript:history.go(-1)">Voltar</button> 
    </div>
       

</body>
</html>