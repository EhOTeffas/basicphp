<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Reajustador de preço</h1>
            <?php 
                $preco = $_GET['valor'] ?? 0;
                $parametro = $_GET['reajuste'] ?? 0;
                $porcent = ( $parametro / 100 ) + 1 ;
                $novoPreco = $preco * $porcent;
            ?>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Preço do Produto</label>
            <input type="number" name="valor" id="valor" value="<?=$value?>">
            <label for="reajuste">Qual será o percentual do reajuste?(<strong><span id = "p"></span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" oninput="mudaValor()" min="0" max="100" value="<?=$reajuste?>">
            <input type="submit" value="Reajustar">
        </form>
        <section>
            <h2>Resultado do Reajuste</h2>
            <p>o produto que custava R$<?= number_format($preco, 2, ",",".")  ?> com o reajuste de <?= $parametro?>% vai passar a custar <strong>R$<?=number_format($novoPreco, 2, ",",".")?> </strong>a partir de agora. </p>
        </section>
        <script>
            mudaValor();

            function mudaValor(){
                p.innerText = reajuste.value
            }
        </script>
    </main>
</body>
</html>