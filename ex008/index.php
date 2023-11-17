<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex008 Salário minimo</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<header><h1>Informe seu salário </h1></header>
<div class="container">
<?php 

$salario = $_GET['salario'] ?? 0;
?>

<form action=<?= $_SERVER['PHP_SELF']?> method="get">
<label for="salario">Informe seu salário:</label>
<input type="number" name="salario" min="1"  value=<?=$salario?> step= "0.01" placeholder="Insira seu salário aqui"  required >
<button type="submit">Calcular</button>
</form>
<p>considerando o salário minimo de R$1.320</p>
</div>
<div class="container">
<?php 

$salario_min = 1.320;
$resultado = intdiv($salario, $salario_min);
$total = (int)($salario/$salario_min);
$diff = $salario % $salario_min;

echo "quem ganha $salario por mês, ganha um total de $total salários mínimos + $diff.";
?>





?>
</div>


</body>
</html>