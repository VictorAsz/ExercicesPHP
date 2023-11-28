<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex009 Raizes</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<header><h1>Informe um número </h1></header>
<div class="container">
    <?php 
        $numero = $_GET['num'] ?? 0;
    ?>

<main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num"> Número:</label>
        <input type="number" name="num" id="num" value="<?=$numero?>" placeholder="Insira aqui seu número">
        <button type="submit">Calcular</button>
    </form>
</main>
</div>

<div class="container">
    <p>Resultado final</p>
    <?php 
        $raiz_quadrada = $numero ** (1/2);
        $raiz_cubica = $numero ** (1/3);

        echo "<p> Analisando o númmero <strong>$numero</strong>, temos:";
        echo "<ul> <li>A sua raiz quadrada é " . number_format($raiz_quadrada, 2, ',', '.') . "</li>";
        echo "<li>A sua raiz cúbica é " . number_format($raiz_cubica, 2,',','.') . "</li> </ul>";

    ?>
</div>



</body>
</html>