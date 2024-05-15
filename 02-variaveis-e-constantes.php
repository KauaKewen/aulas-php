<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Variáveis e constantes</h1>
        <hr>

        <?php 
        // variáveis
        $curso = "Programador Web";
        $ano = 2024;
        $area = "back-end";
        // Estamos no programador Web em 2024
        
        // Saída interpolada (tem que ser com aspas duplas)
        echo "<p>Estamos no $curso em $ano.</p>";

        // Com aspas simples, não funciona a execução dinâmina
        echo '<p>Estamos no $curso em $ano.</p>';


        // Constantes
        define("AUTOR", "Kauã"); //tradicional, antiga
        const EMPRESA = "ABC Tecnologia"; //nova, moderna

        // Kauã trabalha na empresa ABC Tecnologia
        echo "<p>".AUTOR ." trabalha na empresa " .EMPRESA.
        "</p>";
        
        ?>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>