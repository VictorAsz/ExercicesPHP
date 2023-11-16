<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<Header><h1>O resultado é:</h1></Header>
    <?php 
    $num = $_GET["num"] ;
    $sucessor = $num + 1;
    $antecessor = $num - 1;
    echo "<div class='container'> <p> o seu número é $num <br> e seu sucessor é $sucessor. <br> seu antecessor é $antecessor <p/> </div>"
    ?>

<div class="container"> 
        <button onclick="javascript:history.go(-1)">Voltar</button> 
    </div>
    

    
</body>
</html>