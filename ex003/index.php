<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>
</head>
<body>
    <?php 
        $nome = "Marcos";
        $sobrenome = "Vinicius";
        echo "Muito prazer $nome $sobrenome!";

        $sobrenome = "Lima";
        echo " ou você prefere ser chamado de $nome $sobrenome?";
        
        const PAIS = "Brasil";
        echo " É verdade que você mora no " .PAIS; echo "?" ;
    ?>
</body>
</html>