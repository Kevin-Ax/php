<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem usando for</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Contador        
        </h1>
    </header>
    <div>
        <?php
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];

            if($num1 < $num2){
                for($cont=$num1;$cont<=$num2;$cont++){
                    echo "$cont -- ";
                }
                echo "<br>";
                echo  "De trás pra frente: <br>";
                for($cont=$num2;$cont>=$num1;$cont--){
                    echo "$cont -- ";
                }
            }else if ($num1 > $num2){
                for($cont=$num1;$cont>=$num2;$cont--){
                    echo "$cont -- ";
                }
                echo "<br>";

                echo  "De trás pra frente: <br>";
                for($cont=$num2;$cont<=$num1;$cont++){
                    echo "$cont -- ";
                }
            }else{
                echo "Impossível contar!";
            }
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>