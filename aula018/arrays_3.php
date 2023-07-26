<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <pre>
            <?php
            $vetar = array( array(2,3), array (4,5), array(6,7));
            print_r($vetar);
            printf("<br/> <br/>");
            print_r($vetar[1]);
            
            ?>
        </pre>
    </div>
</body>
</html>