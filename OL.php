<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <div>
        <?php 
        $n1 = 2; 
        $n2 = &$n1; 
        $n2 += 5;
        // Nesse cao o $n1, que era 2, recebe +5
        echo "$n1 e $n2";
        // No fim, ambos twem o mesmo valor

        $escola = "Ferraz"; 
        $$escola = "Mario"; 
        echo "<br/>$escola tem uma escola chamada $Ferraz";
        ?> 
    </div> 
</body>
</html>