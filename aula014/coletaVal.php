<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonções em php</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Calculo de média.                
        </h1>
    </header>
    <div>
        <form method="get" action="trataMedia.php">
        <?php
            $quant = isset($_GET["quant"]) ? $_GET["quant"] : 1;
            for($cont = 1;$cont <= $quant; $cont++){
                echo "<p><label for='num$cont'>Insira a $cont nota</label> <input type='number' name='num$cont' id='num$cont'></p>";
            }
        ?>
        <a href="javascript:history.go(-1)">Voltar</a> 
        <input type="submit" value="Calcular">
        </form>
    </div>
</body>
</html>