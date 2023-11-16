<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<Header><h1>Seu número aléatorio de 0 a 1000 é:</h1></Header>
    <?php 
    $num = random_int(1, 1000) ;
  
    echo "<div class='container'> <p> O seu número é: $num <p/> </div>"
    ?>
    <div class="container">
    <button onclick="recarregarPagina()">Recarregar Página</button>
    </div>
    <script>
        function recarregarPagina() {
            location.reload();
        }
    </script>

    
</body>
</html>