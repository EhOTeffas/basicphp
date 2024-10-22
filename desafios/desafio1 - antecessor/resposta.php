<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Antecessor</title>
</head>
<body>
    <main>
        <h1>Resultado final</h1>
            <p>
                <?php 
                $num = $_GET["num"] ?? "digite um número" ;
                echo "o numero escolhido foi" . $num. "<br>";
                echo "o antecessor de $num é " . ($num-1). "<br>";
                echo "o sucessor de $num é " . ($num+1). "<br>";
                ?>
            </p>
            <button onclick="javascript:history.go(-1)">&#x2B05 Voltar</button>
    </main>
</body>
</html>