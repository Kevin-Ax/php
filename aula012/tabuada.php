<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Tabudada        
        </h1>
    </header>
    <div>
        <p>Com o valor escolhido, calcularemos sua tabuada.</p>
        <fieldset> <legend>Escolha um valor</legend>
            <form metrod ="get" action="trataTabuada.php">
                <select name="tab" id="tab">
                    <?php
                        $cont = 1;
                        while($cont <= 100){
                            echo "<option value='$cont'>$cont</option>";
                            $cont++;
                        }
                    ?>
                </select>
                <input type="submit" value="Calcular">
            </form>
        </fieldset>
    </div>
</body>
</html>