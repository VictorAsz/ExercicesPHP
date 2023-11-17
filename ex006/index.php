<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex006 Somador de valores</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <header><h1>Somador de Valores</h1></header>
    <?php 
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
    ?>    


    <form action=<?= $_SERVER['PHP_SELF']?> method="get">
        <label for="v1">Valor 1</label>
        <input type="number" name="v1" value="<?= $valor1?>">
        <label for="v2">Valor 2</label>
        <input type="number" name="v2" value="<?= $valor2?>">
        <button type="submit" value="Somar"> Somar</button>
    </form>
    <div class="container">
<?php 
    $soma = $valor1 + $valor2;
    echo "<p>A soma entre os valores $valor1 e $valor2 é <strong>igual a $soma</strong></p>";

?>
    </div>

</body>
</html>