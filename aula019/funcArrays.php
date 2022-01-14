<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de coleções em php</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Funções de arrays e matrizes        
        </h1>
    </header>
    <div>
        <pre>
        <?php
            $vec = array(11,5,8,4,9,22,65,4);
            print_r($vec);  //imprime o vetor
            echo "<br>";
            var_dump($vec); //imprime o vetor com mais detalhes
            echo "<br>";
            echo "O vetor tem " .count($vec) . " elementos. <br>";  //conta quantos elementos tem o vetor;
            echo "Adicionando um elemento no fim do vetor <br>";
            array_push($vec,10);    //adiciona o elemento no fim do vetor (igual o $vec[] =10)
            print_r($vec);
            echo "<br>";
            echo "Removendo o ultimo elemento do vetor <br>";
            array_pop($vec);    //tra o ultimo elemento do vetor;
            print_r($vec);
            echo "<br>";
            echo "Colocando elementos no começo do array <br>";
            array_unshift($vec, 12);    //coloca elemento no inicio do array
            print_r($vec);
            echo "<br>";
            echo "Tirando o primeiro elemento do array <br>";
            array_shift($vec);  //tira o elemento do incio do array;
            print_r($vec);
            echo "<br>";
            echo "Array ordenado <br>";
            sort($vec);     //ordena os elementos do array;
            print_r($vec);
            echo "<br>";
            echo "Array ordenado em ordem decrescente <br>";
            rsort($vec);     //ordena os elementos do array em ordem inversa (decrescente);
            print_r($vec);
            echo "<br>";
            echo "Array ordenado de forma associativa <br>";
            asort($vec);     //ordena os elementos do array e mantem a associatividade dos elementos;
            print_r($vec);
            echo "<br>";
            echo "Array ordenado decrescentemente de forma associativa <br>";
            arsort($vec);     //ordena os elementos do array inversamente (decrescente) e mantem a associatividade dos elementos;
            print_r($vec);
            echo "<br>";
            echo "Ordenano array com base nas chaves<br>";
            ksort($vec);     //ordena o vetor com base o seus indices;
            print_r($vec);
            echo "<br>";
            echo "Ordenano array com base nas chaves em ordem inversa<br>";
            krsort($vec);     //ordena o vetor com base o seus indices em ordem inversa (decrescente);
            print_r($vec);
            echo "<br>";
        ?>
        </pre>
    </div>
</body>
</html>