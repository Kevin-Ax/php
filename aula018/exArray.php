<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array em php</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <h1>
            Arrays        
        </h1>
    </header>
    <div>
        <pre>
        <?php
            $vec = array(3,5,4,8,2);    //declaração padrão de array
            $vec[] =10;
            print_r($vec);
            
            $vec2 = range(1,30,3);      //declaração de array usando range;
            printf("Contando novo array de 3 em 3");
            echo "<br>";
            print_r($vec2);

            echo "Imprimindo valores de forma formatada : <br>";

            $cont=0;
            foreach($vec as $value){    //estrutura de impressão usada para imprimir vvetores;
                echo "O valor do elemento $cont é $value <br>";
                $cont++;
            }

            $vec3 = array(1=>5,0=>9,12=>20,4=>11);  //vetor declarado com chaves personalizadas
            foreach($vec3 as $v){
                echo "$v ";
            }
            echo "<br>";
            $vec3[]=18;     //mesmo declarado com chaves personalizadas, o comando de adição de elementos no final ainda funciona;
            foreach($vec3 as $v){
                echo "$v ";
            }
            echo "<br>";
            unset($vec3[0]);    //comando para desalocar e excluir elementos e indices dos vetores;
            foreach($vec3 as $v){
                echo "$v ";
            }
            echo "<br>";

            $dadosPessoais = array("nome"=>"Kevin", "idade"=>20, "altura"=>1.84);   //declaração de chaves personalizadas de elementos homogêneos;
            /*$cont=0;
            $impr ="n";*/
            echo "<br>";
            echo "Dados pessoais: <br>";
            foreach($dadosPessoais as $field => $value){    //foreach para chaves e valores associativos;
                /*if($cont==0){
                    $impr = "nome";
                }else if($cont==1){
                    $impr = "Idade";
                }else{
                    $impr = "Altura";
                }*/
                echo "$field : $value; <br>";
                //$cont++;
            }
            $dadosPessoais["Fuma"] = false;     //adição de campos associativos no vetor;
            echo "<br>";
            foreach($dadosPessoais as $field => $value){                
                echo "$field : $value ; <br>";
            }
        ?>
        </pre>
    </div>
</body>
</html>