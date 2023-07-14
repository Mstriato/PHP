<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    switch ($_GET["tip"]) { 
        case 1: 
            $t = $n1+$n2;
            break;
        case 2: 
            $t = $n1-$n2;
            break;
        case 3: 
            $t = $n1/$n2;
            break;
        case 4: 
            $t = $n1*$n2;
            break;
        default: 
        $t = "Opção invalida";
    }
    $tipo = $_GET["tip"]; 
    ?>
    <title>Document</title>
</head>
<body>
    <?php 
    echo $t;
    ?>
</body>
</html>