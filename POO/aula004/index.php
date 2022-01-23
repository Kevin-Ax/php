<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters, setters e contructors</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Métodos especiais        
        </h1>
    </header>
    <div>
        <pre>
        <?php
            require_once "Celular.php";

            $celular = new Celular();   //construtor instanciando o objeto;
            print_r($celular);
            $celular2 = new Celular(100, 20, 80, 95, 0);
            print_r($celular2);
            $celular->download();
            $celular->downVolume();
            $celular->upB();
            $celular->upB();
            print_r($celular);
            echo "Temos um celular com " . $celular->getBatery() . " de bateria <br>";
            echo "Com " . $celular->getBrightness() . " de brilho <br>";
            echo "Capacidade de " . $celular->getStorage() . "GB de memoria <br>";
        ?>
        </pre>
    </div>
</body>
</html>