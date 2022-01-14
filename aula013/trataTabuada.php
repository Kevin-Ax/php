<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada com for</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Tabuada        
        </h1>
    </header>
    <div>
        <?php
            $number = isset($_GET["tab"]) ? $_GET["tab"] : 0;
            $val = 0;

            for($cont = 0; $cont <= 10; $cont++){
                $val  = $number * $cont;
                echo "$number X $cont = $val. <br>";
            }
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>