<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <main>
   <h1>Trabalhando com numeros aleatórios</h1>
   <?php 
        $num = mt_rand(0, 100);
        //random_int() gera numeros aleatorios criptograficamente seguro.
        echo "O número gerado foi $num";
        echo"<br>";   
    ?>    
    <button onclick="javascript:document.location.reload()" >Gerar Novamente</button>
    </main>
</body>
</html>