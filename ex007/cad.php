<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
     <header>
        <h1>
            Resultado do processamento
        </h1>
     </header>
     <main>
        <?php 
            $nome = $_GET["nome"] ?? "Sem nome" ;
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo"<p>É um prazer te conhcer, <strong>$nome $sobrenome</strong>! Este é o meu site";
            // post
            // request - uma junção de $_GET, $_POST E $_COOKIES
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
     </main>
</body>
</html>