<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Condicionais</title>
</head>
<body>
    
<div class="container">
    <h1>Condicionais</h1>
    <hr>

    <h2>Simples (não tem o <code>else</code>)</h2>

    <?php
    $numero = 50;
    if($numero < 100){
        echo "<p>Condição é verdadeira/true!</p>";
    }
    ?>

    <hr>
    <h2>Composta (usa <code>if/else</code>)</h2>


    <?php
    // Controle de estoque

    $produto = "Ultrabook";
    $qtdEmEstoque = 12; //o que temos no momento
    $qtdCritica = 2; //mínimo necessário
    ?>

    <h3>Produto: <?=$produto?></h3>
    <h3>Estoque: <?=$qtdEmEstoque?></h3>

    <?php
    /* Se a quatidade em estoque for abaixo da quantidde crítica, o sistema deve avisar e pedir pra repor. */
if($qtdEmEstoque < $qtdCritica){
    echo "<p class=\"alert alert-danger\">É necessário repor</p>";

}else{
    /* Caso contrário, simplesmente falar que o estoque está normal */
    echo "<p class=\"alert alert-success\">Estoque normal</p>";
}

    
    ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>