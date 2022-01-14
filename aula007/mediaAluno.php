<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checagem de aprovação</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Checagem de aprovação de alunos!
        </h1>
    </header>
    <div>
        <?php
        #exercício para pratica do uso do operador unario/ternário;
            echo "Digite a nota das 3 provas: <br>";
            $nota1=$_GET['n1'];
            $nota2=$_GET['n2'];
            $nota3=$_GET['n3'];
            $media = ($nota1 + $nota2 + $nota3) / 3;
            $sit = ($media>=60) ? "Aprovado" : "Reprovado";
            echo "As notas digitadas foram $nota1, $nota2 e $nota3; <br>";
            echo "A media do aluno é: $media; <br>";
            echo "A situação do aluno é: $sit <br>";
        ?>
    </div>
</body>
</html>