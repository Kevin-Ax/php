<!DOCTYPE html>
<html lang="pt-br">
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
        <form method="get" action="trataMultiplos.php">
            <fieldset> <legend>Insira os valores para calcular a soma</legend>
                <?php
                    for($cont=0;$cont<5;$cont++){
                        echo "<p> <label for='num$cont'>Insira um valor</label> <input type='number' name='num$cont' id='num$cont' </p>";
                    }
                ?>
               <p><input type="submit" value="Calcular"></p>
            </fieldset>
        </form>
    </div>
</body>
</html>