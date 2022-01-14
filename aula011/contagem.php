<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem (while)</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            contador
        </h1>
    </header>
    <div>
        <?php
            $number1 = $_POST["num1"];
            $number2 = $_POST["num2"];

            if($number1 < $number2){
                while($number1 <= $number2){
                    echo "$number1 + ";
                    $number1++;
                }
            }else{
                while($number1 >= $number2){
                    echo "$number1 - ";
                    $number1--;
                }
            }
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>