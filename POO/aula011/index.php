<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança pt2</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Herança de classes em php        
        </h1>
    </header>
    <div>
        <?php
            require_once "Professor.php";
            require_once "Visitante.php";
            require_once "Bolsista.php";
            require_once "Tecnico.php";

            $pedro = new Aluno("Pedro", 17, "M", 1548132, "Programação");
            $ana = new Professor("Ana", 44, "F", "Ingês", 5822);
            $alan = new Bolsista("Alan", 25, "M", 49871, "Programação", 800, 12);
            $mario = new Visitante("Mario",20,"M");
            $clara = new Tecnico("Clara", 19, "F", 448851, "Programação", 458122);

            echo "{$clara->getAge()} <br>";
            $clara->birthDay();
            echo "{$clara->getAge()} <br>";
            $pedro->payMensal();
            $alan->payMensal();
            echo "{$mario->getName()} <br>";
            echo "{$ana->getSal()}  <br>";
            $ana->promotion(300);
            echo "{$ana->getSal()}  <br>";
        ?>
    </div>
</body>
</html>