<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de região</title>
    <link rel="stylesheet" href="../estilo.css">
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            Verificação do estado onde mora.
        </h1>
    </header>
    <div>
        <?php
            $uf = $_GET["uf"];
            switch($uf){
                case 1:
                case 3:
                case 4:
                case 14:
                case 22:
                case 23:
                case 27:
                    echo "Você mora na <span>região Norte</span>!";
                    break;
                case 9:
                case 11:
                case 12:
                    echo "Você mora na <span>região Centro-Oeste</span>!";
                    break;
                case 16:
                case 21:
                case 24:
                    echo "Você mora na <span>região Sul</span>!";
                    break;
                case 8:
                case 13:
                case 19:
                case 25:
                    echo "Você mora na <span>região Sudeste</span>!";
                    break;
                default:
                echo "Você mora na <span>região Nordeste</span>!";
                break;
            }
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>