<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    <a href="index/012.html">Voltar</a>
</body>
</html>