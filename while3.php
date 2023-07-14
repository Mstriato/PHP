<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $in = $_GET["ini"];
    $fim = $_GET["fim"];
    $cont = $_GET["pass"];

    if ($in > $fim ){ 
        $contn = $in;
        while ($contn >= $_GET["fim"]) {
            echo $contn . "<br/>"; 
            $contn -= $cont;
        }
    }
    else { 
        $contp = $in;
        while ($contp <= $fim) {
            echo $contp . "<br/>";
            $contp += $cont;
        }
    }
    ?>
</body>
</html>