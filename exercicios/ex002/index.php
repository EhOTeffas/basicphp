<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP</title>
</head>
<body>
    <h1>Exemplo de PhP</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo");
        echo "hoje é dia " . date("d/M/Y");
        ECHO " e a hora atual é " . date("G:i:s");
    ?>
</body>
</html>