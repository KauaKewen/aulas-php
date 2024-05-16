<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PHP - Arrays</title>
</head>
<body>
    <div class="container"></div>
    <h1>Arrays</h1>
    <hr>
    <h2>Arrays numéricos/indexados</h2>
<?php
// Declarando arrays
$bandas = ["Rush", "Slayer", "slipknot"];
$cursos = array("HTML5", "PHP", "Design", "JS");
define("UNIDADE_SESC", ["Belenzinho", "Bertioga"]);
const UNIDADES_SENAC = ["Penha", "São Miguel", "Itaquera"];


?>

<h3>Acesso e saída de dados</h3>
<p>Curto a banda <?=$bandas[1]?></p>
<p>Já estudei <?=$cursos[3]?></p>
<p>Gostaria de conhecer o Sesc <?=UNIDADE_SESC[1]?></p>
<p>Estamos no Senac <?=UNIDADES_SENAC[0]?></p>


<hr>

<h2>Arrays associativos</h2>

<?php
$filme = [
    // Chave associativa
    "titulo" => "Deadpool 2",
    "ano" => 2018,
    "genero" => "Ação",
    "personagens" => ["Wade Wilson", "Fanático"]
];

$livro = array(
    "titulo" => "Senhor dos Anéis",
    "autor" => "Tolkien"
);
?>

    <h3>Acesso e saída de dados</h3>
    <p>O filme <?=$filme["titulo"]?> foi lançado em <?=$filme["ano"]?></p>

    <p><?=$livro["titulo"]?> é um ótimo livro.</p>

    <hr>

    <h2>Comandos úteis para análise/depuração de arrays</h2>

    <h3><code>print_r()</code> e <code>var_dump()</code></h3>

    <?=print_r($bandas)?>
    <br>
    <br>
    <?=var_dump($bandas)?>
    <br>
    <br>
    <pre>
        <?=var_dump($bandas)?>
    </pre>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>