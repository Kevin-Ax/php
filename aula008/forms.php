<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms em php</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Calculando a raiz quadrada
        </h1>
    </header>
    <div>
        <?php
            $number = $_GET["num"];
            $numRQ = sqrt($number);
            echo "O valor inserido foi $number <br>";
            echo "A raiz quadrada do número inserido é:" . number_format($numRQ,1) . "!<br>";
        ?>
        <a href="forms.html">Voltar</a>
    </div>
</body>
</html>