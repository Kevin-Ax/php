<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções extends</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Operações        
        </h1>
    </header>
    <div>
        <form method="get" action="trataFuncExternas.php">
            <fieldset>
                <?php
                    for($cont=0; $cont<5; $cont++){
                        echo "
                        <label for='num$cont'>Insira um valor:</label>
                        <input type='number' name='num$cont' id='num$cont'> <br>
                        ";
                    }
                ?>
                <input type="submit" value="Operar">
            </fieldset>
        </form>
        <br>
    </div>
</body>
</html>