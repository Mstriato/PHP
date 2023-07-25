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
        <?php 
        $nome = "isSo eh Um tEsTe"; 
        printf("Original: %s <br/>", $nome);
        printf("Usando o strtolower: %s <br/>", strtolower($nome));
        printf("Usando strtoupper: %s <br/>", strtoupper($nome));
        printf("Usando o ucfirst: %s <br/>", ucfirst($nome));
        printf("Usando o ucfirst e strtolower: %s <br/>", ucfirst(strtolower($nome)));
        printf("Usando o ucwords: %s <br/>", ucwords($nome));
        printf("Usando o ucwords e strtolower: %s <br/>", ucwords(strtolower($nome)));
        printf("Usando o strrev: %s <br/>", strrev($nome));
        printf("Usando o strpos: %s <br/>", strpos($nome, "Um"));
        printf("Usando o stripos: %s <br/>", stripos($nome, "um"));
        printf("Usando o substr_count: %s <br/>", substr_count($nome, "Um"));
        printf("Usando o substr: %s <br/>", substr($nome, 0, 7));
        printf("Usando o str_pad: %s <br/>", str_pad($nome, 50, " . ", STR_PAD_RIGHT));
        printf("Usando o str_repeat: %s <br/>", str_repeat(" (T-T) ", 5));
        printf("Usando o str_replace: %s <br/>", str_replace("isSo", "Este", $nome));
        ?> 
    </div>
</body>
</html>