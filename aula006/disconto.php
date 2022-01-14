<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuição</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Aplicando discontos
        </h1>
    </header>
    <div>
        <?php
        //exercício para pratica de operadores de atribuições;
            $a = $_GET["a"];
            $preco = $a;
            //forma improvisada de imprimir o valor em formato monetário
            //echo "O valor do produto é R$$preco.00 <br>";

            //impressão da formatação monetária dos valores corretamente
            echo "O valor do produto é R$" . number_format($preco,2,",",".") . "<br>";
            $percentDesconto = 10;
            $desconto = ($percentDesconto*$preco) / 100;
            $preco -= $desconto;
            //echo "Com 40% de desconto, ele custa R$$preco.00";
            echo "Com desconto de $percentDesconto%, o produto fica R$" . number_format($preco,2,",",".") . "<br>";
        ?>
    </div>
</body>
</html>