<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Tabuada</h2>
        <form action="for2_2.php" method="get">
            <select name="num">
                <?php
                for ($c = 1; $c <= 10; $c++) { 
                    echo "<option>$c</option> ";
                }
                ?> 
                <input class="botao" type="submit" value="Calcular">
            </select>
        </form>
    </div>
</body>
</html>