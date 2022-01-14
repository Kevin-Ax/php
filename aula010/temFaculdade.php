<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de aula</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Verificação de aula.
        </h1>
    </header>
    <div>
        <?php
            $day = isset($_POST["day"]) ? $_POST["day"] : 0;

            switch($day){
                case 1:
                    echo "Hoje é domingo, não tem aula na faculdade. <br>";
                    break;
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Hoje tem aula na faculdade. <br>";
                    break;
                case 7:
                    echo "Hoje é sábado, não tem aula na faculdade. <br>";
                default:
                    echo "Dia inválido, escolha um dia!<br>";
            }
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>