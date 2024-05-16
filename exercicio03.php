<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <h1>Exercicio</h1>
    <hr>
    <?php
    $meses = [
        "janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"
    ];

    foreach($meses as $mes){ ?>
    <ol>
        <li><?=$mes?></li>
        
    </ol>
    <?php
    }
    ?>
</body>
</html>