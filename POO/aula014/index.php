<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio gafanhoto</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Gafanhoto estudante        
        </h1>
    </header>
    <div>
        <pre>
        <?php
            require_once "Vizualizacao.php";

            $kevin = new Gafanhoto("Kevin", 20, "M", 500, 10026032, true, 100);
            $aula = new Video("Aula 14b", "top", 56193, 3300, true);
            $A[0] = new Video("Aula POO");
            $A[1] = new Video("Aula PHP");
            $A[2] = new Video("Aula JAVA");
            $vizu[0]=new Vizualizaçao($kevin, $A[0]);
            $vizu[1]=new Vizualizaçao($kevin, $A[1]);
            $vizu[2]=new Vizualizaçao($kevin, $A[2]);
            $vizu[0]->avaliar();
            $vizu[1]->avaliarNota(8);
            $vizu[2]->avaliarPercent(75);
        ?>
        </pre>
    </div>
</body>
</html>