<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazendo a primeira classe em php</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Classes        
        </h1>
    </header>
    <div>
        <pre>
        <?php
            require "Caneta.php";
            $caneta = new Caneta;
            $caneta->color="azul";
            $caneta->isOpen=true;
            $caneta->fuel=100;
            print_r($caneta);
            $caneta->open();
            $caneta->write();
            $caneta->paint();
            print_r($caneta);
            $caneta->close();
            $caneta->reload();
            print_r($caneta);

        ?>
        </pre>
    </div>
</body>
</html>