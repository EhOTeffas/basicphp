<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $valor = $_GET['valor']
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="valor" id="valor" step="5">
            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponiveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
        <?php 
            $temp;
            $cem = (int)($valor / 100);
            $temp = $valor % 100;
            $cinquenta = (int)($temp / 50);
            $temp = $temp%50;
            $dez = (int)($temp/10);
            $temp = $temp%10;
            $cinco = (int)($temp/5);
            $temp = $temp%5;
            var_dump($temp);
        ?>
        <section>
            <h2>Saque de R$<?= number_format($valor, 2, ",", ".")?> Realizado</h2>
            <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
            <ul>
                <li> <p><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?=$cem?></p>
                <li> <p><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?=$cinquenta?></p>
                <li> <p><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?=$dez?></p>
                <li> <p><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?=$cinco?></p>
            </ul>
        </section>
    </main>
</body>
</html>