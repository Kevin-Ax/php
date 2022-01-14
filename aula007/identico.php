<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operador de identidade</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Testando o uso do operador de identidade.
        </h1>
    </header>
    <div>
        <?php
            $num = 5;
            $str = "5";
            echo "Testano o operador de igualdade: <br>";
            $igualdade = ($num==$str) ? "iguais" : "diferentes";
            echo "As variáveis são $igualdade! <br>";
            echo "Testano o operador de identidade: <br>";
            $identidade = ($num===$str) ? "identicas" : "não identicas";
            echo "As variáveis são $identidade! <br>";
        ?>
    </div>
</body>
</html>