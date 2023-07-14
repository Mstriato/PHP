<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $data = 2023-($_POST["nasc"]);
    echo "Sua idade é $data anos e você ";
    if ($data<16) {
        $vot = "Não pode votar";
        $dirig = "Não pode dirigir";
    }

    else  {
        if ($data<=17) {
            $vot = "Já pode , mas opcional";
            $dirig = "Não pode dirigir";

        }
        else {
            $vot = "Já pode votar";
            $dirig = "Já pode dirigir";
        }
        echo "<br/>".$vot;
        echo "<br/>".$dirig;
        
    }
    ?>
</body>
</html>