<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funções em php</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Calculo de média.        
        </h1>
    </header>
    <div>
        <?php
            function media(){
                $arg = func_get_arg();
                $qArg = func_num_args();
                $media = 0;

                for($cont = 0;$cont < $qArg;$cont++){
                    $media += $arg[$cont];
                }

                return $media;
            }
            
            //passar quantidade ?
            
            for($cont = 1; $cont <= $quant;$cont++){
                $aux = "num" . $cont;
                $url = "num" . $cont;
                $$aux = isset($_GET[$url]) ? $_GET[$url] : 1;
            }

            //Passar todos parâmetros para a função?
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>