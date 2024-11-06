<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquina do Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calculando a sua idade</h1>
        <?php 
        $atual = date('Y');
        ?>
        <form action="#" method="get">
            <label for="ano">Em que ano você nasceu?</label>
            <input type="number" name="ano" id="ano" required>
            <label for="ano2">Quer saber a sua idade em que ano? ( estamos em <?= $atual?> )</label>
            <input type="number" name="ano2" id="ano2" required>
            <input type="submit" value="Qual será a minha idade?">
        </form>
        <?php 
            $nasci = $_GET['ano'] ?? 1;
            $desejado = $_GET['ano2'] ?? 1;
            $idade = $desejado - $nasci;
        ?>
        <section>
            <h2>Resultado</h2>
            <p> Quem nasceu em <?= $nasci?> vai ter <strong><?= $idade?></strong> em <?= $desejado?> </p>
        </section>
    </main>
</body>
</html>