<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Funções</title>
</head>
<body>
    <div>
        <pre>
        <?php 
        $n = array(0,5,2,8,7); 
        $n[] = 9;
        $new = $n;
        $new2 = $n;
        array_push($n,1) ;
        print_r($n);
        printf("<br/> <br/>");
        array_pop($n);
        print_r($n);
        printf("<br/> <br/>");
        array_unshift($n, 5);
        print_r($n);
        printf("<br/> <br/>");
        array_shift($n);
        print_r($n);
        printf("<br/> <br/>");
        sort($n);
        print_r($n);
        printf("<br/> <br/>");
        rsort($n);
        print_r($n);
        printf("<br/> <br/>");
        asort($new);
        print_r($new);
        printf("<br/> <br/>");
        arsort($new2);
        print_r($new2);
        printf("<br/> <br/>");
        ksort($new2);
        print_r($new2);
        printf("<br/> <br/>");
        krsort($new);
        print_r($new);
        printf("<br/> <br/>");
        
        printf("<br/> <br/>");

        printf("<br/> <br/>");

        printf("<br/> <br/>");
        ?>
        </pre>
    </div>
</body>
</html>