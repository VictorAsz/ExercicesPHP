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

    $num = $_POST['num'] ?? 0;
    $int = (int) $num;
    $fra = $num - $int;  

    echo " <p> Analisando o número  <strong>" 
    . number_format($num, 3, ",", ".") 
    . " </strong>informado: </p>";

    echo "<ul><li>A parte inteira do número é <strong>"
    . number_format($int, 0, ",", ".")
    . "</strong></li></ul>";
    
    echo "<ul><li>A parte fracionária do número é <strong>"
    . number_format($fra, 3, ",", ".")
    . "</strong></li></ul>";
    

       
    ?>

</div>
    <div class="container"> 
        <button onclick="javascript:history.go(-1)">Voltar</button> 
    </div>
</body>
</html>