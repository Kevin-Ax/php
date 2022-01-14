<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários dinámicos</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Calculo da média
        </h1>
    </header>
    <div>
        <?php
            $cont = 1;
            while($cont <= 5){
                $v = "num" . $cont;   
                $url = "num" . $cont;     // o nome passado a essa variavel desse ser a mesma passada no form, 
                                        //para recolher dados do formulário da primeira página

                $$v = isset($_GET[$url]) ? $_GET[$url] : 0 ;
                $cont++;
            }

            $soma = 0;
            $cont = 1;

            while($cont <= 5){
                $aux = "num" . $cont;
                $soma += $$aux;
                $cont++;
            }
            $soma /= 5;
            echo "A media dos valores inseridos $soma <br>";
            ?>

        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>