<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Document</title>
</head>
<body>
<div>
    <?php 
    $num = $_GET["num"];
    $fat = 1;
    $c = $num;
    do { 
        $fat = $fat*$c; 
        echo "$fat "; 
        $c--;
    } while ($c>=1);
    ?>
    <a class="botao" href="index/012.html">Voltar</a>
</div>
</body>
</html>