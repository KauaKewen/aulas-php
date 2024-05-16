<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 02</title>
</head>
<body>

<h1>Exercicio</h1>
    <?php

        const DADOS = [
            "nome" => "chapolin",
            "senha" => 12345,
            "idade" => 30,
            "cidade" => "São Paulo",
            "telefones" => ["11-2135-0300", "11-91234-5678"]
        ];
    ?>
<ol>
    <li><?=DADOS["nome"]?></li>
    <li><?=DADOS["idade"]?></li>
    <li><?=DADOS["cidade"]?></li>
    <li><?=DADOS["telefones"][1]?></li>
</ol>
</body>
</html>