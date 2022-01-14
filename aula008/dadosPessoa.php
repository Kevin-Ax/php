<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados pessoais</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Dados pessoais
        </h1>
    </header>
    <div>
        <?php
            $name = isset($_POST["name"]) ? $_POST["name"] : "Não informado";
            $yearBorn = isset( $_POST["y"]) ?  $_POST["y"] : "Não informado";
            $gender = isset($_POST["gender"]) ? $_POST["gender"] : "Não informado";
            $actualYear = Date("Y");
            $age = ($yearBorn != 0) ? $actualYear - $yearBorn : "Idade não informada";
            echo "$name, de gênero $gender, tem $age anos! <br>";
        ?>
        <a href="dadosPessoa.html">Voltar</a>
    </div>
</body>
</html>