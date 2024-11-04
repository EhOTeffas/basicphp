<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $salario = (int) $_GET['s1'] ?? 0;
        ?>
        <h1>Informe o seu Salário</h1>
        <form action="" method="get">
            <label for="s1">Salário</label>
            <input type="number" name="s1" id="s1" min= "0">
            <p>Considerando o salario minimo de <strong>R$ 1.412,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
        <section>
            <header></header>
            <h2>Resultado Final</h2>
            <?php 
                $minimo = 1412;
                $qtdDeSalarios = (int)($salario/$minimo);
                $resto = $salario % $minimo;
                echo "<p>Seus <strong>R$". number_format($salario, 2,",",".") . "</strong> equivalem a<strong> $qtdDeSalarios salarios minimos</strong> + <strong>R$" . number_format($resto, 2 , "," , ".") ."</strong> </p>";
                // var_dump($resto);
                // var_dump($salario);
                // var_dump($minimo);
                // var_dump($qtdDeSalarios);
            ?>
        </section>

    </main>
</body>
</html>