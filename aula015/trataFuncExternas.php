<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções extends</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Operações        
        </h1>
    </header>
    <div>
        <?php
            include "../funcoes.php";

            for($cont=0; $cont<5; $cont++){
                $aux = "num" . $cont;
                $url = "num" . $cont;
                $$aux = isset($_GET[$url]) ? $_GET[$url] : 0;
            }
            
            /*for($cont=0; $cont<3; $cont++){
                $calc = "num" . $cont;
                $aux = "numFat" . $cont;
                $$aux = fat($calc);
            }*/

            $numFat0 = fat($num0);
            $numFat1 = fat($num1);
            $numFat2 = fat($num2);
            $numFat3 = fat($num3);
            $numFat4 = fat($num4);
            echo "O fatoril de $num0 é $numFat0 <br>";
            echo "O fatoril de $num1 é $numFat1 <br>";
            echo "O fatoril de $num2 é $numFat2 <br>";
            echo "O fatoril de $num3 é $numFat3 <br>";
            echo "O fatoril de $num4 é $numFat4 <br>";

            $soma = soma($num0, $num1, $num2, $num3, $num4);
            $media = media($num0, $num1, $num2, $num3, $num4);
            echo "A soma dos valores é $soma e a média é $media";
            
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>