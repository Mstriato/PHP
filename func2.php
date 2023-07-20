<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Adicionando funções externas</title>
</head>
<body>
    <div>
        <?php 
        include "funcoes.php";
        ola();

        $som = soma(3,6,7,9); 
        echo $som;
        ?>
    </div>
</body>
</html>