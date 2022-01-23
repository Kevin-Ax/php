<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEC</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Ultimate Emoji Fight!        
        </h1>
    </header>
    <div>
        <?php
            require_once "Lutador.php";
            require_once "Luta.php";
            $L=array();
            $L[0]=new Lutador("pretty boy","França", 31, 1.75, 68.9, 11, 2, 1);
            $L[1]=new Lutador("putscript", "Brasil", 28, 1.68, 57.8, 14, 2, 3);
            $L[2]=new Lutador("snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $L[3]=new Lutador("dead code", "Austrália", 28, 1.95, 81.8, 13, 0, 2);
            $L[4]=new Lutador("Ufocobol" , "Brasil", 31, 1.170, 119.3, 5, 4, 3);
            $L[5]=new Lutador("Nerdard", "EUA", 30, 1.81, 105.7, 12, 2, 4);
            $luta1 = new Luta($L[2], $L[5]);
            $luta1->Fight();
            $luta2 = new Luta($L[0], $L[1]);
            $luta2->Fight();
            $luta3 = new Luta($L[4], $L[4]);
            $luta3->Fight();
            $luta4 = new Luta($L[4], $L[5]);
            $luta4->Fight();
        ?>
    </div>
</body>
</html>