<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes em php</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Funções em php        
        </h1>
    </header>
    <div>
        <form method="get" action="trataFuncoes.php">
            <fieldset><legend>Potências com funções</legend>
                <?php
                    for($cont = 1; $cont <= 2; $cont++){
                        echo "<p> <label for='num$cont'>Insira um valor</label> <input type='number' name='num$cont' id='num$cont' </p>";
                    }
                ?>
                <p><input type="submit" value="Calcular"></p>
            </fieldset>
        </form>
    </div>
</body>
</html>