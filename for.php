<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>for</title>
</head>
<body>
    <div>
        <?php
        for ($c = 1; $c <= 10; $c++) { 
            echo "$c <br/>";
        }
        echo "<br/>";
        for ($c = 10; $c >= 1; $c--){
            echo "$c <br/>";
        }
        ?>
    </div>
</body>
</html>