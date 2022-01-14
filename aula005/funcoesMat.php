<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções matemáticas do php</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Analisando as funões aritiméticas inbutidas no php.
        </h1>
    </header>
    <div>
        <?php
            //pegando valores da url
            $num1 = $_GET["x"];
            $num2 = $_GET["y"];
            echo "Valores recebidos foram $num1 e $num2<br>";
            echo "O valor absoluto de $num1 é " . abs($num1) . "<br>";
            echo "O valor absoluto de $num2 é " . abs($num2) . "<br>";
            echo "O valor de $num1 <sup>$num2</sup> é " . pow($num1, $num2). "<br>";
            echo "O valor da raiz quadrada de $num1 é " . sqrt($num1) . "<br>";
            echo "O valor da raiz quadrada de $num2 é " . sqrt($num2) . "<br>"; 
            echo "O valor de $num1 arredondado é " . round($num1) . "<br>";
            echo "O valor de $num2 arredondado é " . round($num2) . "<br>";
            echo "O valor inteiro de $num1 é " . intval($num1) . "<br>";
            echo "O valor inteiro de $num2 é " . intval($num2) . "<br>";
            echo "O valor de $num1 em dinheiro é R$" . number_format($num1,2,",",".") . "<br>";
            echo "O valor de $num2 em dinheiro é E$" . number_format($num2,2,",",".") . "<br>";
        ?>
    </div>
</body>
</html>