<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";

                echo"<h1>Superglobal GET</h1>";
                var_dump($_GET);
                
                echo"<h1>Superglobal POST</h1>";
                var_dump($_POST);
                
                echo"<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);

                echo"<h1>Superglobal COOKIES</h1>";
                var_dump($_COOKIE);

                echo"<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);

                echo"<h1>Superglobal env</h1>";
                var_dump($_ENV);

                // foreach(getenv() as $c => $v){
                //     echo "$c -> $v <br>";
                // }

                echo"<h1>Superglobal Server</h1>";
                var_dump($_SERVER);

                echo"<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>
<!-- 
    Superglobais em php
    $_GET - gera um array com as variaveis passadas por uma url
    $_POST - gera um array com variaveis passadas pelo metodo post
    $_REQUEST - gera um vetor associativo para ambos os métodos. 
    $_COOKIE - acessa os cookies da sua aplicação php
    $_FILES - pega os dados de arquivos uploadeados

    $_ENV
    $_SERVER
    $GLOBALS
-->
