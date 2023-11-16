<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex004 Analisador de float</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<header><h1>Analisador de número real:</h1></header>
    
    <form action="resultado.php" method="post">
        <label for="num"><p>Insira o Número</p></label>
        <input type="number" name="num" placeholder="insira o número aqui" step="0.001" required>

    <button type="submit" value="Analisar"> Analisar</button>
    </form>

</body>
</html>