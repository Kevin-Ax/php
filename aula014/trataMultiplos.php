<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funções php</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Multiplos parâmetros        
        </h1>
    </header>
    <div>
        <?php
            include "../funcoes.php";

            for($cont=0;$cont<5;$cont++){
                $aux = "num" . $cont;
                $url = "num" . $cont;
                $$aux = isset($_GET[$url]) ? $_GET[$url] : 0;
            }

            $soma = soma($num0, $num1, $num2, $num2, $num4);
            //bugs acontecem quando se usa o input do usuário;
            echo "A soma dos valores é $soma.";
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>