<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial de um número</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Calculando fatorial.        
        </h1>
    </header>
    <div>
        <?php
            $number = isset($_GET["numer"]) ? $_GET["numer"] : 0;
            $numberInit = $number;
            $fat = 1;

            if($number > 0){
                do{
                    $fat *= $number--;
                }while($number > 1);
            }else{
                $fat = 1;
            }

            echo "O fatorial de $numberInit é $fat! <br>";
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>