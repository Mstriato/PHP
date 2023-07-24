<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Utilizando o print_r</title>
</head>
<body>
    <div>
    <?php 
    $x[0] = 1; 
    $x[1] = 2;
    $x[2] = 3; 
    print_r($x);
    printf("</br> </br>");
    $v2 = array (1,2,3,4,5,6,7,8);
    print_r($v2);
    printf("</br> </br>");
    var_dump($v2);
    printf("</br> </br>");
    var_export($v2);
    ?>
    </div>
</body>
</html>