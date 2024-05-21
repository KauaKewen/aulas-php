<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
            li:nth-child(odd) {
                background-color: gray;
            }
    </style>
    <title>Exercicio 3</title>
</head>
<body>
    <h1>Exercicio</h1>
    <hr>
    <?php
    $meses = [
        "janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"
    ];
    ?>
    <ol>
    <?php
    foreach($meses as $mes){ ?>
        <li><?=$mes?></li>
        
        <?php
    }
    ?>
    </ol>
</body>
</html>