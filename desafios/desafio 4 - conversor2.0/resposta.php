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
                // cotação vinda do banco central
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'02-21-2023\'&@dataFinalCotacao=\'02-28-2023\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                $inicio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");
                $dados = json_decode(file_get_contents($url), true);
                $cotacao = $dados["value"][0]["cotacaoCompra"];
                $num = $_GET["number"];
                $num2 = $num / $cotacao;
                echo"<p>Seus R$ $num equivalem a USD$ <strong>$num2</strong></p>";
                echo"Cotação retirada do banco central";

                // $padrao = numfmt_create("pt_BR", NumberFormatter:: CURRENCY);
                // echo "<p>Seus". numfmt_format_currency($padrao, $num, "BRL") . " equivalem a <strong>".numfmt_format_currency($padrao, $num2, "USD")."</strong></p>";
            ?>
            <p></p>
            <button>Voltar</button>
        </section>

    </main>
</body>
</html>