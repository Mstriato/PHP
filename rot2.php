<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Rotina com retorno</title>
</head>
<body>
    <div>
        <?php
        function soma($a,$b) { 
            return $a+$b;
        }
        $tot = soma(9,5);
        echo $tot . "</br>";
        $x = 4;
        $y = 24;
        $tot = soma($x,$y);
        echo "A soma entre $x e $y é $tot";
        ?>
    </div>   
</body>
</html>