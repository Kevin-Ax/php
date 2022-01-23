<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visibilidade de classes</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Visibilidade de classes em php;        
        </h1>
    </header>
    <div>
        <pre>
        <?php
            require_once "Garrafa.php";

            $garrafa = new Garrafa;
            $garrafa->capacity = 100;
            $garrafa->type = "Guaraná";
            print_r($garrafa);
            $garrafa->open();
            $garrafa->drink();
            $garrafa->close();
            $garrafa->emp();
            print_r($garrafa);
        ?>
        </pre>
    </div>
</body>
</html>