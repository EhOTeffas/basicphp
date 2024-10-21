<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulando Strings</title>
</head>
<body>
<h1> Aspas duplas: </h1>
    <?php 
        $string = "String";
        $emoji = "\u{1F418}";
        $concat = $string . $emoji;
        echo " $concat"
    ?>
    <p></p>
    <h1>Aspas Simples</h1>
    <?php 
        $string2 = 'String';
        $emoji2 = '\u{1F418}';
        $concat2 = $string2 . $emoji2;
        echo  "$string2"; echo "$emoji2"
    ?>
    <p></p>
    <?php echo " não há um pré-processamento do conteúdo quando se usa aspas simples \n "; echo "\n"; 
    
    echo <<< TESTE
    carambolas pq agora isso deu certo?
    esse php é todo bugado.
    TESTE;
    ?>
    <p></p>
    <!-- 
        Aspas duplas:
            " Exemplo " . " Um " => "ExemploUm"
            nas aspas duplas há a interpretação do conteúdo 
            da string
        Aspas simples:
            não há a interpretação do conteúdo da string
        Herodoc:

        Nowdoc:

    -->

</body>
</html>