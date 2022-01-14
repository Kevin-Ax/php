<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários dinámicos</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Calculo da média
        </h1>
    </header>
    <div>
    <form method="get" action="formsDinamicosT.php">
        <?php
            $quant = 1;
            while($quant <=5){
                echo "Insira um valor: <input type='number' name='num$quant' id='num$quant'> <br>";
                $quant++;
            }
        ?>
        <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>