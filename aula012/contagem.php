<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratidando Do while</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Contador        
        </h1>
    </header>
    <div>
        <?php
            $number = isset($_GET["num"]) ? $_GET["num"] : 0;
            if($number < 500){
                do{
                    echo "$number ->";
                    $number++;
                }while($number <= 500);
            }else if($number > 500){
                do{
                    echo "$number ->";
                    $number--;
                }while($number >= 500);
            }else{
                echo "Já está em 500";
            }
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>