<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex010 Médias aritméticas</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<header><h1>Médias Aritméticas</h1></header>
<div class="container">
    <?php 
     $valor1 = isset($_GET['v1']) ? floatval($_GET['v1']) : 0;
     $peso1 = isset($_GET['p1']) ? floatval($_GET['p1']) : 1;
     $valor2 = isset($_GET['v2']) ? floatval($_GET['v2']) : 0;
     $peso2 = isset($_GET['p2']) ? floatval($_GET['p2']) : 1git;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1"  required value="<?=$valor1?>">
            <label for="p1">1º peso</label>
            <input type="number" name="p1" min="1"  required value="<?=$peso1?>">
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" min="1" required value="<?=$valor2?>">
            <label for="p2">2º peso</label>
            <input type="number" name="p2" min="1" required value="<?=$peso2?>">
            <button type="submit" value="Calcular médias">Calcular médias</button>
    </form>
    </main>
    </div>
    
    <div class="container">
        <?php 
           
            $ma = ($valor1 + $valor2) / 2;
            $mp = ($valor1 * $peso1 + $valor2  * $peso2)/($peso1 + $peso2);
        ?>
        <h2>Cálculo das médias</h2>
        <p>Analisando os valores <?=$valor1?> e <?=$valor2?>:</p>
        <ul>
            <li>
                A <strong> Média Aritmética Simples</strong> entre os valores é igual a <?=number_format($ma,2, ",", ".")?>.
            </li>
            <li>
                A <strong>Média Aritmética Ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> é igual a <?=number_format($mp,2, ",", ".")?> .
            </li>
        </ul>
        <?php 

        ?>
</div>



</body>
</html>