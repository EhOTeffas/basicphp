<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="" method="get">
        <label for="n1">Dividendo</label>
        <input type="number" name="n1" id="n1" min = "0" value="<?=$numerador?>" >
        <label for="n2">Divisor</label>
        <input type="number" name="n2" id="n2" min = "1" value="<?=$denominador?>">
        <input type="submit" value="Enviar">    
    </form>
    </main>
    <section>
        <h1>Estrutura de uma divisão</h1>
        <?php 
            $numerador = $_GET['n1'] ?? 0;
            $denominador = $_GET['n2'] ?? 1;
            $resto = $numerador % $denominador;
            $quociente = ((int)($numerador/$denominador));
            echo "<p>O numerador é: $numerador</p>";
            echo "<p>O denominador é: $denominador</p>";
            echo "<p>O resto da divisão é: $resto</p>";
            echo "<p>O quociente da divisão é: $quociente</p>";
        ?>
        <table class="divisao">
            <tr>
                <td><?= $numerador?></td>
                <td><?= $denominador?></td>
            </tr>
            <tr>
                <td><?= $resto?></td>
                <td><?= $quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>