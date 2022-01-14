<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores lógicos</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Checagem de obrigatoriedade de voto!
        </h1>
    </header>
    <div>
        <?php
            $ano = 2022;
            $anoNascimento = $_GET['ano'];
            $idade = $ano - $anoNascimento;
            echo "Sua idade é $idade. <br>";
            $obgr = ($idade >=18 and $idade<=64) ? "Voto Obrigatório!" : "Voto não obrigatório!";
            echo "Sua situação em relação às eleições é: $obgr <br>";
        ?>
    </div>
</body>
</html>