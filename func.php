<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>funções com passagem por referencia </title>
</head>
<body>
    <div>
        <?php
        function soma (&$a, $b) { 
            $a += 5; 
            return $a + $b;
        } 
        $aa = 7; 
        $bb = 4; 
        echo "Somando $aa + 5... ";
        $s = soma($aa, $bb); 
        echo "$aa </br>";
        echo "O valor entre $aa e $bb é $s"
        ?>
    </div>
</body>
</html>