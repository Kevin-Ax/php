<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando o comando 'switch'.</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Condições Multiplas.
        </h1>
    </header>
    <div>
        <?php
            $number = isset($_GET["num"]) ? $_GET["num"] : 0;
            $operation = isset($_GET["operation"]) ? $_GET["operation"] : 1;

            switch($operation){
                case 1:
                    $double = $number*2;
                    echo "O dobro de $number é $double. <br>";
                    break;
                case 2:
                    $cube = $number**3;
                    echo "O cubo de $number é $cube. <br>";
                    break;
                case 3:
                    $RQ = sqrt($number);
                    echo "A raiz quadrada de $number é $RQ. <br>";
                    break;
            }
        ?>
        <a href="condicaoMultipla.html">Voltar</a>
    </div>
</body>
</html>