<!DOCTYPE html>
<!-- tem como dar include aqui em cima :o -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <h1>Informe um Número</h1>
        <form action="#" method="get">
        <label for="num">Número</label>
        <input type="number" name="num" id="num">
        <input type="submit" value="Calcular">
        </form>
        <section>
            <h2>Resultado final</h2>
            <?php 
                $num = $_GET['num'] ?? 0;
                $raiz2 = sqrt($num);
                $raiz3 = ($num ** (1/3));
                var_dump($num);
                echo"<p>As raizes do número, <strong>$num</strong> são:</p>";
                echo"<ul>";
                echo"<li>Raiz quadrada: <strong>" . number_format($raiz2, 3, "," , "") . "</strong>";
                echo"<li>Raiz cúbica: <strong>" . number_format($raiz3, 3, "," , "") . "</strong>";
                echo"</ul>";
            ?>
        </section>
    </main>
</body>
</html>