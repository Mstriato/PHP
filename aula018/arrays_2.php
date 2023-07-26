<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>foreach e personalizadas</title>
</head>
<body>
    <div>
        <pre>
            <?php 
            $n = range(2,40,5);
            foreach ($n as $v) {
                printf("%d ", $v);
            }
            printf("<br/>");
            $new = array(1=>"A",3=>"B",5=>"C");
            $new[] = "E";
            $new[] = "I"; 
            print_r($new);
            unset($new[7]);
            print_r($new);

            printf("<br/> <br/>");
            $cad = array("Nome"=>"Maria", "Idade"=>23, "Pesp"=>63.0);
            $cad["Filhos"] = true;
            foreach ($cad as $k => $v) {
                echo ("O campo ~$k~ tem o conteudo $v <br/>");
            }
            ?>
        </pre>
    </div>
</body>
</html>