<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando funções de string</title>
    <link rel="stylesheet" href="../estilo.css">
    <style>
        div{
            width: 800px;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            Usando funções de manipulação de String em php.        
        </h1>
    </header>
    <div>
        <fieldset> <legend>Olhar o código fonte para observar as diferenças das impressões!</legend>
            <?php
                $prod = "leite";
                $price = 3.6;
                echo "O $prod está R$ $price <br>";
                printf("O %s está R$ %.2f",$prod, $price);  //%s é para imprimir string, %f é para imprimir floats, e o .2 para formatar com 2 casas decimais
                echo "<br>";
                $x[0]=1;
                $x[1]=3;
                $x[2]=5;
                for($cont=0; $cont<3; $cont++){
                    echo "$x[$cont] ";
                }
                echo "<br>";
                $vetor2 = array(1,3,5,7,9);
                $vetor3 = array(0,2,4,6,8);
                print_r($x);    //imprime básicamente
                echo "<br>";
                var_dump($vetor2);  //mostra com mais detalhes na impressão (quantos elementos tem, e os tipos armazenados em cada posição;)
                echo "<br>";
                var_export($vetor3);    //Impressão simples, mostrando apenas o indice que está relacionado ao seu respectivo elemento, sem muita formatação técnica;
                $text = "Essa é uma string gigante para o teste da função de manipulação de strings usando wordwrap como função.";
                $resTxt = wordwrap($text,35,"<br>");    //quebra linha da string,pondendo ser quebra de linha isual ou no códgo do fonte do cliente;
                echo "<br>";
                echo $resTxt;
                echo "<br>";
                $nome ="Kevin Alexandre de Castro Lourencini";
                $tamNome = strlen($nome);
                printf("O nome %s tem %.0f letras.",$nome,$tamNome);
                echo "<br>";
                $nome2 = "   José Palauro da Silva Pereira      ";
                $tamNome2 = strlen($nome2); //conta quantos caracteres tem a string, incluidno espaços em branco;
                printf("O nome %s tem %.0f letras",$nome2, $tamNome2);
                echo "<br>";
                $tamNome2 = strlen(trim($nome2));   //trim tira os espaços vazios do moceço e do fim da string
                echo "Na verdade o $nome2 tem $tamNome2 letras";
                echo "<br>";
                $tamNome2 = strlen(ltrim($nome2));   //ltrim tira os espaços vazios do moceço da string
                echo "Na verdade o $nome2 tem $tamNome2 letras";
                echo "<br>";
                $tamNome2 = strlen(rtrim($nome2));   //rtrim tira os espaços vazios do fim da string
                echo "Na verdade o $nome2 tem $tamNome2 letras";
                echo "<br>";
                $frase = "Estudando php para conseguir um emprego";
                echo "A frase '$frase' tem " . str_word_count($frase,0) . " palavras <br>";     //conta quantas palavras tem, usando parâmetro 0;
                print_r(str_word_count($frase,1));  //sando parametro 1, conta palavras e as coloca dentro de um array;
                echo "<br>";
                print_r(str_word_count($frase,2));  //usando parâmetro 2, conta as palavras, as coloca dentro de um vetor, e cada caractere ocupa 1 elemento do vetor criado;
                echo "<br>";
                $vetFrase = explode(" ", $frase);
                print_r($vetFrase);     //Sempre que achar um caractere de separação, conta ela como palavra, e ao fim, joga todas as palavras dentro de um vetor; Mesma função que o str_word_count usando parametro 1 tem
                echo "<br>";
                $vetFrase2 = str_split($frase);     //pega cada caracter da string e coloca num vetor;
                print_r($vetFrase2);
                echo "<br>";
                $frase2 = implode(" ", $vetFrase);  //pega as palavras de um vetor e junta em uma string, inverso da explode;
                echo "$frase2 <br>";
                $frase3 = join(" ", $vetFrase2);    //funciona igual a implode;
                echo "$frase3 <br>";
                echo "O código numérico da letra " . chr(65) . " é 65 <br>";    //mostra o caractere do codigo numérico dado como parâmetro;
                echo "<br>";
                echo "O código numérico da letra " . ord("a") . " é a <br>";    //mostra o caractere do codigo numérico dado como parâmetro;
                echo "<br>";
                echo "O nome em minusculas é " . strtolower($nome . "<br>");    //passa todos os caracteres da string para minusculas
                echo "<br>";
                echo "O nome em minusculas é " . strtoupper($nome . "<br>");    //passa todos os caracteres da string para maiusculas
                echo "<br>";
                $nome3 = ucfirst($nome);        //Coloca a primeira letra da string em maiusculas
                printf("O nome é %s .",$nome3);
                echo "<br>";
                $nome3 = ucwords(strtolower($nome));        //Coloca as primeiras letras de todas palavras da string em maiusculas
                printf("O nome é %s .",$nome3);
                echo "<br>";
                echo "O nome ao contrário é " . strrev($nome) . "<br>"; //inberte a string
                $pos = strpos($nome, "Castro");     //Mostra a posição da primeira letra da sub string declarada como parâmetro;
                echo "A posição da palavras Castro é $pos <br>";
                $pos = stripos($nome, "Castro");     //Mostra a posição da primeira letra da sub string declarada como parâmetro, ignorando o "case' da string declarada;
                echo "A posição da palavras Castro é $pos <br>";
                $count = substr_count($frase, "Estudando"); //conta quantas palavras específicadas no parâmetro, tem na string;
                echo "$count <br>";
                $subs = substr($nome,0,5);  //cria uma substring da string passada com a variável, e o inicio da substring começa com o caractere que está na posição passada como init e termina com o caractere na posição end passada no parâmetro;
                printf("%s", $subs);
                echo "<br>";
                $nomePad = str_pad($nome, 80, " ", STR_PAD_RIGHT);  ////Faz a variável citada caber na quantidadede caracteres passados pelo parâmetro num, e coloca o complemento para oculpar esses espaços criados, nesse caso, à direita, pois foi usado o STR_PAD_RIGTH, mas se fosse STR_PAD_LEFT, colocaria à esquerda;;
                printf("O novo nome é %s .",$nomePad);
                echo "<br>";
                $repeat = str_repeat("Castro", 10); //repete a string passada a quantidade de vezes passada;
                echo "$repeat . <br>";
                $frase5 = str_replace("Estudando","Aprendendo",$frase); ///pega a string qu e queremos substituir e coloca a string de substituição na string da variável passada
                echo "$frase5 <br>";

            ?>
        </fieldset>
        <br>
    </div>
</body>
</html>