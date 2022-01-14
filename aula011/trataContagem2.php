<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador personalizado</title>
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
            $cont = 1;
            while ($cont <= 2){
                $aux = "num" . $cont;   //How i declare the variable;
                $url = "num" . $cont;   //How she was named on the 1º page in the forms;
                $$aux = isset($_POST[$url]) ? $_POST[$url] : 0;
                $cont++;
            }            
            $walk = $_POST["walk"];

            if($num1 < $num2){
                while($num1 <= $num2){
                    echo "$num1 -> ";
                    $num1 += $walk;
                }
            }else if($num1 > $num2){
                while($num1 >= $num2){
                    echo "$num1 -> ";
                    $num1 -= $walk;
                }
            }else{
                echo "Não é possível contar!";
            }
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>