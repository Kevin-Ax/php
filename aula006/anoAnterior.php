<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ano anterior</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Calculando anos com operadores de incremento.
        </h1>
    </header>
    <div>
        <?php
            //Exercício para utilização de operadores de incremento e decremento
            $anoAtual = $_GET['a'];
            echo "O ano atual é $anoAtual. <br>";
            //usando decremento/incremento
            $anoPassado = --$anoAtual;
            $anoAtual++;
            $anoSeguinte = ++$anoAtual;
            echo "O ano passado foi $anoPassado! <br>";
            echo "O ano que vem será $anoSeguinte! <br>";
        ?>
    </div>
</body>
</html>