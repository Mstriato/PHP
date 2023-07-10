<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores Logicos</title>
</head>
<body>
    <div>
        <?php 
        $data = $_GET ["data"];
        $data = 2023-$data;
        echo "Você é obrigado a votar? <br/>". ($data=($data>=16&&$data<=65)?"Sim":"Não");

        ?> 
    </div>
</body>
</html>