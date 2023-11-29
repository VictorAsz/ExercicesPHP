<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex014 Simulador de caixa eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
    
</head>
<body>

    <header><h1>Caixa Eletrônico</h1></header>
            <?php 
                $saque = $_REQUEST['saque'] ?? 0;
            ?>
    <main>
        <div class="container">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="saque">Qual valor você deseja sacar? (R$) <sup>*</sup></label>
                <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
                <p>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
                
                <button type="submit" value="Sacar">Sacar</button>    
            </form>
        </div>
        </main>
    <?php
        $resto = $saque;
        //R$100
        $tot100 = floor($resto / 100);
        $resto %= 100;
        // R$50
        $tot50 = floor($resto / 50);
        $resto %= 50;
         // R$10
         $tot10 = floor($resto / 10);
         $resto %= 10;
        // R$5
        $tot5 = floor($resto / 5);
        $resto %= 5;
    ?>
  
    <div class="container">
        <h2>Saque de R$<?=number_format($saque, 2, ",",".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li>
                <img class="nota" src="imagens/100-reais.jpg" alt="nota de 100"> x<?=$tot100?>
            </li>
            <li>
                <img class="nota" src="imagens/50-reais.jpg" alt="nota de 50"> x<?=$tot50?>
            </li>
            <li>
                <img class="nota" src="imagens/10-reais.jpg" alt="nota de 10"> x<?=$tot10?>
            </li>
            <li>
                <img class="nota" src="imagens/5-reais.jpg" alt="nota de 5"> x<?=$tot5?>
            </li>
        </ul>
    </div>

</body>
</html>