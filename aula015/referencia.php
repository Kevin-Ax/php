<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções por referência</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Fatorial        
        </h1>
    </header>
    <div>
        <?php
            function fat(&$num){
                $fat = 1;
                do{
                    $fat *= $num--;
                }while($num > 1);
                $num = $fat;
            }

            $number = $_GET["num"];
            $initNumber = $number;
            fat($number);
            echo "O fatorial de $initNumber é $number.";
        ?>
        <br>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </div>
</body>
</html>