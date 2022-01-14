<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números primos</title>
    <link rel="stylesheet" href="../estilo.css">
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            Checagem de número primo.
        </h1>
    </header>
    <div>
        <?php
            $number = $_POST["num"];
            $contDiv = 0;
            $divs = "";

            for($cont = 1;$cont <= $number;$cont++){
                if($number % $cont == 0){
                    $contDiv++;
                    $divs .= "$cont ";
                }
            }

            echo "<h3>Analisando o número $number</h3>";
            echo "Multiplos de $number: $divs <br>";
            echo "Resultado: ";
            if($contDiv <= 2){
                echo "$number <span>é primo.</span>";
            }else{
                echo "$number <span>não é primo.</span>";
            }
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>