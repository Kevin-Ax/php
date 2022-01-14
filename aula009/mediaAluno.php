<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checagem de aprovação</title>
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
            Calculo de média do aluno.
        </h1>
    </header>
    <div>
        <?php
            $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
            $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;
            $media = ($n1+$n2) / 2;
            $situ = "id";

            if($media < 5){
                $situ = "REPROVADO";
            }else if($media < 7){
                $situ = "RECUPERAÇÂO";
            }else{
                $situ = "APROVADO";
            }

            echo "Sua média é <span>$media</span>, você está <span>$situ</span>!";
        ?>
        <a href="mediaAluno.html">Voltar</a>
    </div>
</body>
</html>