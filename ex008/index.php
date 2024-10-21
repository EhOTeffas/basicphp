<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores e funções</title>
</head>
<body>
    <?php 
        $res = 50/2 + 3 ** 2;
        echo "O resultado é $res";
        $res2 = 50/(2 + 3) ** 2;
        echo "O resultado é $res2";
        // $res3 = 50/2 + 3 ** 2;
        // echo "O resultado é $res3";

        // abs() = módulo;
        $bc = base_convert(254, 10, 8);
        echo("<p>A resposta é $bc</p>");
        $bc = base_convert(254, 10, 2);
        echo("<p>A resposta é $bc</p>");
        $bc = base_convert(1011, 2, 10);
        echo("<p>A resposta é $bc</p>");

        $r = intdiv(5, 2);
        echo("<p>A resposta é $r</p>");
        $r = min(5, 2);
        echo("<p>A resposta é $r</p>");
        $r = max(5, 2);
        echo("<p>A resposta é $r</p>");
        $r = min(5, 2, -7, 28, 69, 114);
        echo("<p>A resposta é $r</p>");
        $r = max(5, 2, -7, 28, 69, 114);
        echo("<p>A resposta é $r</p>");

        $r = M_PI;
        echo("<p>A resposta é $r</p>");
        $r = PI();
        echo("<p>A resposta é $r</p>");

        $r = hypot(3, 4);
        echo("<p>A resposta é $r</p>");
        $r = pow(15, 89);
        echo("<p>A resposta é $r</p>");

        // sin(), cos(), tan(), ceil(), floor(), round(), sqrt()
        //$r = 27 ** (1/3);
        //echo("<p>A resposta é $r</p>"); 
        //
    ?>
</body>
</html>