<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Leitores        
        </h1>
    </header>
    <div>
        <?php
            require_once "Pessoa.php";
            require_once "Livro.php";

            $carlos=new Pessoa("Carlos", 28, "M");
            echo " {$carlos->getName()} tem {$carlos->getAge()} anos. <br>";
            $livro1 = new Livro("Harry Potter", "JK Rolling", 487, 500, false, $carlos);
            $livro1->open();
            $livro1->detals();
            $livro1->overview();
            $carlos->birthDay();
            echo " {$carlos->getName()} tem {$carlos->getAge()} anos. <br>";
            $livro1->passPage();
            $livro1->passPage();
            $livro1->detals();
            $livro1->close();
        ?>
        <br>
    </div>
</body>
</html>