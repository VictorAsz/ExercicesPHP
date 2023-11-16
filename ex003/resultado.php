<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<Header><h1>Seu número aléatorio de 0 a 1000 é:</h1></Header>
<div class='container'>
    <?php 
        $valor_real = $_GET["valor"];
        $cotacao = 5.50;
        $resultado = $valor_real / $cotacao;
       

        echo "<p>  R$" .  number_format($valor_real, 2, ",", ".") . " vale R$"  . number_format($resultado, 2, ",", ".") . " em dólares na cotação fixa de 5.50</p> 
        "
    ?>
    </div>
        <div class="container"> 
        <button onclick="javascript:history.go(-1)">Voltar</button> 
    </div>
   

</body>
</html>