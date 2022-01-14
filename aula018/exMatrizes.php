<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrizes em php</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Matrizes        
        </h1>
    </header>
    <div>
        <pre>
        <?php
            $mat = array(array(1,2,3), array(1,5,8), array(5,6,7), array(9,8,7));   //criando uma matriz 4X3;
            print_r($mat);  //impressão da matriz funciona com o print_r
            $element = $mat[3][2];  //referênciação de elementos em matriz
            echo "$element  <br>";
        ?>
        </pre>
    </div>
</body>
</html>