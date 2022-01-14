<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checagem de Maioridade</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Verificação de maioridade
        </h1>
    </header>
    <div>
        <?php
            $name = isset($_POST["name"]) ? $_POST["name"] : "[nome não inserido]";
            $age = isset($_POST["age"]) ? $_POST["age"] : '0';
            $vote = false;
            $drive = false;
            if($age >= 16){
                $vote = true;
            }if($age >=18){
                $drive = true;
            }

            if($vote && $drive==false){
                echo "$name pode votar, mas não é velho o sufuciente para dirigir! <br>";
            }else if($vote && $drive){
                echo "$name pode votar e dirigir! <br>";
            }else{
                echo "$name ainda é menor de idade e não pode dirigir nem votar! <br>";
            }
        ?>
        <a href="checagemIdade.html">Voltar</a>
    </div>
</body>
</html>