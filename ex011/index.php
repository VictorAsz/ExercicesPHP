<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex011 Calculo de Idade</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<header><h1>Calculando a sua idade</h1></header>
<main>
    <div class="container">
    
        <?php 
            $atual = date("Y");
            $nasc = $_GET['nasc'] ?? '2000';
            $ano = $_GET['ano'] ?? $atual;
        ?>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" min="1900" max="<?=$atual - 1?>" value="<?=$nasc?>">
            <label for="ano">Quer saber sua idade em que ano?</label>
            <input type="number" name="ano" min="1900" value="<?=$ano?>">
            <button type="submit">Qual será minha idade?</button>
            </form>
    </div>
    </main>
    <div class="container">
            <?php 
                $idade = $ano - $nasc;
            ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$idade?> anos</strong> em <?=$ano?> !</p>
    </div>



</body>
</html>