<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Tests</title>
</head>
<body>
    <div>
        <?php
         $txt = "   Teste de string    ";
         $tamanho = strlen($txt); 
         echo ($tamanho . "<br/>");

         echo (trim($txt). "<br/>");
         echo (strlen(trim($txt)) . "<br/>");
         echo (ltrim($txt). "<br/>");
         echo (strlen(ltrim($txt))."<br/>");
         $tamanho_r = rtrim($txt);
         echo ($tamanho_r."<br/>");
         echo (str_word_count($txt) . "<br/>");
         $vet = explode(" ",$txt);
         echo ("<br/>");
         print_r($vet);
         echo ("<br/> <br/>");
         $vet = str_split($txt);
         print_r($vet);
         $vet = array(1,2,3,4,5,6);
         echo ("<br/> <br/>");
         print_r($vet);
         echo ("<br/> <br/>". implode($vet). "<br/> <br/>");
         echo (ord("n") . "<br/>");
         echo (chr(110). "<br/>");

        ?>
    </div>
</body>
</html>