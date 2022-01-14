<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <?php
        //subscript em php para atribuição e armazenamento dos valores para por na css
        $text = isset($_GET{"text"}) ? $_GET{"text"} : "[texto não informado]"; 
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "20pt";
        $color = isset($_GET["color"]) ?  $_GET["color"] : "#000000"; 
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php com css</title>
    <link rel="stylesheet" href="../estilo.css">
    <style>
        span.text{
            font-size: <?php echo "$tam"; //tag php para conseguir validar a atribuição em css ?>;
            color: <?php echo "$color";?>;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            Personalização de texto
        </h1>
    </header>
    <div>
        <?php
            echo "<span class='text'>$text</span>"; //criação de um span com classe para editar no css local
        ?>
        <br>
        <a href="personalizacao.html">Voltar</a>
    </div>
</body>
</html>