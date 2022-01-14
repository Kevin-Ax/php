<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis referênciadas</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            testando o uso de variáveis referênciadas.
        </h1>
    </header>
    <div>
        <?php
            $a = 8;
            $b = $a;
            $c = &$a;
            echo "Nossas variáveis são $a, $b e $c. <br>";
            echo "Fazendo algumas operações: <br>";
            #fazendo operações para testar os valores que se alteram entre as variáveis;
            $a++;
            echo "com algumas alterações feitas, temos: a= $a, b= $b e c= $c. <br>";
            $b += $a;
            echo "com algumas alterações feitas, temos: a= $a, b= $b e c= $c. <br>";
            $c += 4;
            echo "com algumas alterações feitas, temos: a= $a, b= $b e c= $c. <br>";
            $a += 2;
            echo "com algumas alterações feitas, temos: a= $a, b= $b e c= $c. <br>";
            $c -= $b;
            echo "com algumas alterações feitas, temos: a= $a, b= $b e c= $c. <br>";
            $a += $b + 2;
            echo "Por fim, temos: a= $a, b= $b e c= $c. <br>";
            /*
            Podemos concluir que quando mexo em a, c muda, e quando mexo em c, a muda pois c é uma referência de a;
            Mas b é apenas uma copia, e portanto pode ser manipulada sem interfirir em outras variáveis;
            Todas terminaram com o mesmo valor no fim por mera coincidência;
            */ 
        ?>
    </div>
</body>
</html>