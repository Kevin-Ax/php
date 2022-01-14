<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes em php</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Funções em php        
        </h1>
    </header>
    <div>
        <?php
            function pot($a, $b){
                $expo = $a**$b;
                return $expo;
            }

            for($cont = 1; $cont <= 2;$cont++){
                $aux = "num" . $cont;
                $url = "num" . $cont;
                $$aux = isset($_GET[$url]) ? $_GET[$url] : 1;
            }

            $pot = pot($num1, $num2);
            echo "$num1 elevado a $num2 é $pot! <br>";
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>