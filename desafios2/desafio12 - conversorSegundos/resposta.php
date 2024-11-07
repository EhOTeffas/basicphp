<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Segundos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calculadora de Tempo</h1>
        <?php 
        $secs = $_GET['numero'];
        // $_SERVER['PHP_SELF']
        ?>
        <form action="#" method="get">
            <label for="numero">Qual é o total de Segundos?</label>
            <input type="number" name="numero" id="numero">
            <input type="submit" value="Calcular">
        </form>
        
        <section>
            <h2>Totalizando tudo</h2>
            <p>Analisando o valor que você digitou, <strong><?=$secs?> segundos</strong> equivalem a um total de: </p>
            <?php 
                $semanas = (int)($secs/604800);
                $dias = (($secs/604800)-((int)($secs/604800)))/86400;
                var_dump($dias);
            ?>
            <ul> 
                <li>  <?=$semanas?> semanas
                <li>  {} dias
                <li>  {} horas
                <li>  {} minutos
                <li>  {} segundos
            </ul>
        </section>
    </main>
</body>
</html>