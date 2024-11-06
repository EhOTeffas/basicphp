<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Média Aritmética e Ponderada</h1>
        <form action="#" method="get">
            <label for="n1">1° valor</label>
            <input type="number" name="n1" id="n1" required>

            <label for="p1">1° peso</label>
            <input type="number" name="p1" id="p1" required>
            
            <label for="n2">2° valor</label>
            <input type="number" name="n2" id="n2" required>
            <label for="p2">2° peso</label>
            <input type="number" name="p2" id="p2" required>

            <input type="submit" value="Calcular">
            
        </form>
        <?php 
            $valor1 = $_GET["n1"] ?? 1;
            $peso1 = $_GET["p1"] ?? 1;
            $valor2 = $_GET["n2"] ?? 1;
            $peso2 = $_GET["p2"] ?? 1;
        ?>
        <section>
            <h2>Calculo das Médias</h2>
            <?php 
            $aritmetica = ($valor1 + $valor2)/2;
            $ponderada = ( $valor1*$peso1  + $valor2 * $peso2 ) / ($peso1 + $peso2);
            echo"Analisando os valores $valor1 e $valor2, temos que:";
            echo"<ul>";
            echo"<li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a $aritmetica";
            echo"<li>A <strong>Média Ponderada</strong> entre os valores é igual a $ponderada"  ;
            echo"</ul>";
            ?>
        </section>
    </main>
</body>
</html>