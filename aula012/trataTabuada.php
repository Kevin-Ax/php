<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabudada</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Tabudada        
        </h1>
    </header>
    <div>
        <?php
            $number = isset($_GET["tab"]) ?  $_GET["tab"] : 0;
            $tabu = 0;
            $val = 0;
            do{
                $val = $number * $tabu;
                echo "$number X $tabu = $val. <br>";
                $tabu++;
            }while($tabu <= 10);
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>