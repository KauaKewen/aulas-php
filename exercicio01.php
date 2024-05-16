<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .dados1 b {
            color:red;
        }
    </style>
    <title>Exercicio 01</title>
</head>
<body>
    <h1>Exercicio 1</h1>
    <hr>
    <p>Crie um novo arquivo chamado exercicio01.php e nele crie variáveis e/ou constantes para:</p>
    <ul>
        <li>Nome de uma pessoa (exemplo: Chapolin)</li>
        <li>Idade que esta pessoa tem (exemplo: 25)</li>
    </ul>

    <p>Mostre no HTML uma mensagem qualquer apresentando o nome da pessoa e a idade dela. Exemplo: "Chapolin possui 25 anos."

    Faça algum tipo de destaque visual no nome e outro na idade.</p>

    <?php
    const NOME = "Kauã";
    $idade = 18;
    ?>

    <div class="dados1">
        <p><b><?=NOME?></b> possui <b><?=$idade?></b> anos.</p>
    </div>

    
</body>
</html>