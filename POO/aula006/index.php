<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamento em php</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Teste do uso da classe Controle Remoto        
        </h1>
    </header>
    <div>
        <?php
            require_once "ControleRemoto.php";

            $controle = new ControleRemoto();
            $controle->on();
            for($cont=0; $cont<50; $cont++){
                $controle->upVolume();
            }
            $controle->play();
            $controle->openMenu();
            $controle->unMute();
            $controle->off();
            $controle->pause();
            $controle->openMenu();
            $controle->closeMenu();

        ?>
    </div>
</body>
</html>