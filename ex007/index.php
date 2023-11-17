<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex007 Analisador de divisão</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<header><h1>Anatomia de uma divisão</h1></header>

<?php 

$dividendo = $_GET['dividendo'] ?? 0;
$divisor = $_GET['divisor'] ?? 1;

?>
    
    <form action=<?= $_SERVER['PHP_SELF']?> method="get">
        <label for="dividendo"><p>Dividendo</p></label>
        <input type="number" name="dividendo" placeholder="insira o número aqui" step="0.01" required value=<?= $dividendo ?>>
        <label for="divisor"><p>Divisor</p></label>
        <input type="number" name="divisor" placeholder="insira o número aqui" step="0.01" required value=<?= $divisor ?>>


    <button type="submit" value="Analisar"> Analisar</button>
    </form>

    <div class="container">
<?php 
if ($divisor != 0) {
    $resultado = intdiv($dividendo, $divisor);
    $resto = $dividendo % $divisor;
    // echo "A divisão de $dividendo por $divisor é $resultado <br>";
    // echo "O resto da divisão é $resto";
    
    echo "<table class='divisao'>
    <tr>
        <td>$dividendo</td>
        <td>$divisor</td>
    </tr>
    <tr>
        <td>$resto</td>
        <td> $resultado</td>
    </tr>
    </table>";
} else {
    echo "<p> Não é possível fazer uma divisão por zero </p>";
};

?>
    </div>

</body>
</html>