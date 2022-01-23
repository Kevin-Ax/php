<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliformismo</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Poliformismo        
        </h1>
    </header>
    <div>
        <?php
            require_once "Mamifero.php";
            require_once "Reptil.php";
            require_once "Peixe.php";
            require_once "Ave.php";
            require_once "Gato.php";
            require_once "Cobra.php";
            require_once "Tartaruga.php";

            $mam = new Gato(3,2.5, 4, "Preto");
            $rep = new Tartaruga(6,1, 0, "verde", "marrom");
            $pei = new Peixe(0.8,0.6, 5, "azul");
            $ave = new Ave(0.2,0.3, 2, "laranja");

            $pei->soltaBolhas();
            $ave->fazerNinho();
            $mam->emitirSom();
            $rep->locomover();
            $mam->reagir();
            $mam->reagirFrase("oi");
            $mam->reagirFD("oi", true);
            $rep->locomover();
        ?>
    </div>
</body>
</html>