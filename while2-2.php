<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $c = 1;
    while ($c <= 5) { 
        echo "valor $c: " . $_GET["v$c"] . "<br/>";
        $c++;
    }

    //Outra forma, mas salvando os valores: 
    $i = 1; 
    while ($i <= 5) { 
        $v = "num" . $i;
        $$v = $_GET["v$i"];
        $i++; 
    }
    $i = 1;
    while ($i <= 5) {
        $v = "num" . $i;
        echo "valor $i: " . $$v . "<br/>"; 
        $i++;
    }
    ?>
</body>
</html>