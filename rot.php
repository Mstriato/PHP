<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Rotinas</title>
</head>
<body>
     <div>
     <?php
    function soma ($a, $b) { 
        $s = $a+$b; 
        echo "<p> A soma de $a e $b é igual a $s </p>";
    }
    soma(1,9);
    soma(3,5);
    $x = 3; 
    $y = 10; 
    soma($x,$y);
    ?>
    </div>
</body>
</html>