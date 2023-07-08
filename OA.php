<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores Aritimeticos</title>
</head>
<body>
    <div>
        <?php
        $a = $_GET["a"];
        $b = $_GET["b"];
        $n1 = 3;
        $n2 = 4;
        $s = $n1 + $n2; 
        echo "A soma entre $n1 e $n2 é $s" . "<br/>";
        echo "A soma entre $n1 e $n2 é igual a " . ($n1+$n2) . "<br/>";
        echo "A multiplição de $n1 e $n2 é " . ($n1*$n2) . "<br/>";
        echo "A divisão é " . ($n1/$n2) . "<br/>";
        echo "O resto da divisão é " . ($n1%$n2) . "<br/>";
        echo "A soma entre $a e $b é " . ($a+$b) . "<br/>";
        echo "$n1 elevado a $n2 é " . pow($n1, $n2) . "<br/>"; 
        echo "A raiz quadrade de $n1 é " . sqrt($n1) . "<br/>";
        echo "O numero $n1 em formatção monetraria é R$" . number_format($n1, 2, ",", ".")
        ?> 
    </div>
</body>
</html>