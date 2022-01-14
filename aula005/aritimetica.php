<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritiméticos em php</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Usando operadores aritiméticos
        </h1>
    </header>
    <div>
        <?php
            //testando com valores dados pela url;
            $num1 = /*5*/ $_GET["a"]; //a e b podem ser mudados para qualquer coisa, desde que sejam as mesmas coisas digitadas na url;
            $num2 = /*12*/ $_GET["b"];
            $soma = $num1 + $num2;
            $sub = $num1 - $num2;
            $mult = $num1 * $num2;
            $divi = $num1 / $num2;
            $rest = $num1 % $num2;
            $pot = $num1 ** $num2;
            echo "A soma de $num1 + $num2 é $soma! <br>";
            echo "A subtração de $num1 - $num2 é $sub! <br>";
            echo "A multiplicação de $num1 * $num2 é $mult! <br>";
            echo "A divisão de $num1 / $num2 é $divi! <br>";
            echo "O resto da divisão de $num1 % $num2 é $rest! <br>";
            echo "A potenciação de $num1 ** $num2 é $pot! <br>";  
            
            $num3 = 8;
            $num4 = 4; 
            $num5 = 12;
            $media = ($num1 + $num2 + $num3 + $num4 + $num5) / 5;
            echo "<br>A média de $num1, $num2, $num3, $num4 e $num5 é $media! <br>";  
        ?>
    </div>
</body>
</html>