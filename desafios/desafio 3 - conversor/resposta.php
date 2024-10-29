<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Conversão em dólar</h1>
         
        <section>
            <?php 
                $num = $_GET["number"];
                $num2 = $num / 5;
                echo"<p>Seus R$ $num equivalem a USD$ <strong>$num2</strong></p>";
                echo"Cotação ficticia: 1USD = 5BRL";
            ?>
            <p></p>
            <button>Voltar</button>
        </section>

    </main>
</body>
</html>