<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variável variantes</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Variaveis variantes ou variaveis de variaveis
        </h1>
    </header>
    <div>
        <?php
            echo "Usando o conceito de variáveis variantes: <br>";
            //variavel padrão;
            $nome = "kevin";
            echo "A variavel padrão foi declara, ela é nome e tem -$nome- como conteúdo <br>";
            //variavel variante;
            $$nome = "idade: 20 anos";
            echo "A variavel variante agora é a variante de nome, e seu conteudo é -$kevin- <br>";
        ?>
    </div>
</body>
</html>