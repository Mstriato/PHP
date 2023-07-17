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
    $div = $_GET["num"];
    $t = 1;
    for ($c = 1; $c <= 10; $c++) { 
        $t = $div*$c;
        echo "$div x $c= $t <br/>";
    } 
    ?>
    <br/> <a class="botao" href="for2.php">Voltar</a> 
    </div>
</body>
</html>