<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador personalizado</title>
    <link rel="stylesheet" href="../estilo.css">
    <style>
        div{
            width: 650px;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            Contador        
        </h1>
    </header>
    <div>
        <p>Contaremos do primeirlo ao segundo número, somando o terceiro número</p>
        <form method ="post" action="trataContagem2.php">
            <?php
                $cont =  1;
                while($cont <= 2){
                    echo "<label for='num$cont'>Insira o $cont º número: </label> <input type='number' name='num$cont' id='num$cont'> <br>";
                    $cont++;
                }
            ?>
        Incremento: 
        <select name="walk" id="walk"> 
            <?php
                $contOpt = 1;
                while($contOpt <= 10){
                    echo "<option value='$contOpt'>$contOpt</option>";
                    $contOpt++;
                }
            ?>  
        </select>
        <br>
        <input type="submit" value="Contar">
        </form>
    </div>
</body>
</html>