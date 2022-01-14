<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada com for</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Tabuada        
        </h1>
    </header>
    <div>
        <form method ="get" action="trataTabuada.php">
            <fieldset> <legend>Escolha um valor</legend>
                <p>Calcularemos a tabuada do valor escolhido.</p>
                <select name="tab" id="tab">
                    <?php
                        for($cont = 0;$cont <= 100; $cont++){
                           echo "<option value='$cont'>$cont</option>";
                        }
                    ?>'
                </select>
                <input type="submit" value="Calcular">
            </fieldset>
        </form>
    </div>
</body>
</html>