<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <form action="while2-2.php" method="get">
        <?php 
        $c = 1;
        while ($c <= 5) {
            echo "Valor $c: <input type='number' name='v$c' id='v$c' max='100' min='0' value='0'> <br/>";
            $c++;
        }
        ?>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>