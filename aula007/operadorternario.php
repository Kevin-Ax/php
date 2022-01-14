<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador ternário</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            testando uso do operador ternário.
        </h1>
    </header>
    <div>
        <?php
            echo "Digite no pimeiro parametro 1 para somar ou 2 para multiplicar <br>";
            echo "Em seguida, digite os dois próximos números a serem operador <br>";
            $oper = $_GET['a'];
            $num1 = $_GET['b'];
            $num2 = $_GET['c'];
            echo "Os valores inseridos foram $num1 e $num2. <br>";
            //uso do operador ternário para selecionar entre qual operação fazer;
            $valorOperacao=($oper==1)?$num1+$num2:$num1*$num2;
            echo "O resultado da operação é $valorOperacao! <br>";
        ?>
    </div>
</body>
</html>