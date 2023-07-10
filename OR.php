<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores Relacionais</title>
</head>
<body>
    <div>
        <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET ["op"];
        $maior = $n1>$n2?$n1:$n2;
        
        echo "Os valores passados foram $n1 e $n2 <br/>";
        echo "O maior valor é $maior <br/>";
        $r = ($tipo=="s")?$n1+$n2:$n1*$n2; 
        echo "O resultado é $r"

        ?>
    </div>
</body>
</html>