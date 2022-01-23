<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança (pt1)</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Herança em php        
        </h1>
    </header>
    <div>
        <?php
            require_once "Pessoa.php";
            require_once "Aluno.php";
            require_once "Professor.php";
            require_once "Funcionario.php";

            $pedro = new Aluno("Pedro", 17, "M", 1548132, "Programação");
            $ana = new Professor("Ana", 44, "F", "Ingês", 5822);
            $cleiton = new Funcionario("Cleiton", 32, "M", "Vendas", false);
            echo "Numa escola temos o aluno {$pedro->getName()}, a professora {$ana->getName()}, e no setor de {$cleiton->getSector()}, temos o {$cleiton->getName()} <br>";
            echo "{$pedro->getName()} tem {$pedro->getAge()} anos e estuda {$pedro->getDiscp()} <br>";
            echo "{$ana->getName()} tem {$ana->getAge()} anos e é especialista em {$ana->getEspeciality()}, recebe R$ {$ana->getSal()} por mês <br>";
            echo "{$cleiton->getName()} tem {$cleiton->getAge()} anos e trabalha no setor {$cleiton->getSector()} <br>";

        ?>
    </div>
</body>
</html>