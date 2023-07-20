<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas com multiplos parametros</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
        function soma () { 
            $v = func_get_args();
            $totv = func_num_args();
            $s = 0; 
            for ($i=0; $i<$totv; $i++) { 
                $s += $v[$i];
            }
            return $s;
        }
        $hum = soma(1,4,6,8,9,4); 
        echo $hum;
        ?>
    </div>
</body>
</html>