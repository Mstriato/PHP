<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Wordwrap</title>
</head>
<body>
    <div>
        <?php 
        $txt = "Uma string gigante que será utilizado no exemplo. É isso ai";
        $res = wordwrap($txt, 5, "<br/>\n", false);
        echo ($res);
        ?> 
    </div>
</body>
</html>