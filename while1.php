<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <?php 
    $c = 1; 
    $r = 10; 
    while ($c <= 10) { 
        echo $c . "<br/>"; 
        $c++;
    }
    echo "<br/>"; 
    while ($r >= 1) { 
        echo $r . "<br/>"; 
        $r--;
    }
    ?>
</body>
</html>