<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex013 Calculador de tempo</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<header><h1>Calculadora de tempo</h1></header>
<main>
    <div class="container">
    
        <?php 
            $total = $_REQUEST['seg'] ?? 0;

        ?>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="seg">Qual é o total de segundos?</label>
                <input type="number" name="seg" min="0" step="1" required value="<?=$total?>">
            <button type="submit" value="Reajustar">Calcular</button>    
        </form>
    </div>
    </main>
    <div class="container">

    <?php 
        $sobra = $total;
        //semanas
        $semana = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;
        //dias
        $dia = (int)($sobra / 86_400);
        $sobra = $sobra % 86_400;
        // horas
        $hora = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;
        // minutos
        $minuto = (int)($sobra / 60);
        $sobra = $sobra % 60;
        //segundos

        $segundo = $sobra;


    ?>
          <h2>Totalizando tudo:</h2>
          <p>Analisando o valor que você digitou, <strong> <?=number_format($total,0,",",".")?> </strong> segundos equivalem a um total de:</p>
          <ul>
            <li><?=$semana?> semanas </li>
            <li><?=$dia?> dias </li>
            <li><?=$hora?> horas </li>
            <li><?=$minuto?> minutos </li>
            <li><?=$segundo?> segundos </li>

          </ul>
          
    
    </div>

</body>
</html>