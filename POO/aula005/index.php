<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COnta Bancária</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Conta Bancária        
        </h1>
    </header>
    <div>
        <?php
            require_once "ContaBanco.php";

            echo "Jubileu e Creuza foram ao banco abrir contas pessoais <br>";
            $jubConta = New ContaBanco(15641651, "Poupança", "Jubileu", 0, "ABERTA");
            $jubConta->mostraDados();
            $creConta = New ContaBanco(1654161516166, "Corrente", "Creuza", 0, "ABERTA");
            $creConta->mostraDados();
            echo "<br>";
            echo "Com as contas abertas, Creuza depositou 500 reais <br>";
            $creConta->depositar(500);
            $creConta->mostraDados();
            echo "<br>";
            echo "Jubileu depositou 300 reais; <br>";
            $jubConta->depositar(300);
            $jubConta->mostraDados();
            echo "<br>";
            echo "Depois disso tudo, Creuza resolveu sacar 400 reais <br>";
            $creConta->sacar(400);
            $creConta->mostraDados();
            echo "<br>";
            echo "Chegou ao fim do dia e as operações bancárias acabaram. <br>";
            echo "Extrato final do dia nas contas: <br>";
            $jubConta->mostraDados();
            $creConta->mostraDados();
            echo "<br>";
        ?>
    </div>
</body>
</html>