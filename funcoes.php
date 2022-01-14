<?php
    //funções gerais de uso;

    //fatorial;
    function fat($num){
        $fat = 1;
        do{
            $fat *= $num--;
        }while($num > 1);
        return $fat;
    }

    //exponencial
    function expo($base, $expo){
       return $base ** $expo;
    }

    //soma mutiplos vallores;
    function soma(){
        $arg = func_get_args();
        $qArg = func_num_args();
        $soma = 0;

        for($i = 0;$i < $qArg;$i++){
            $soma += $arg[$i];
        }
        return $soma;
    }

    //calcula média de multiplos valores;
    function media(){
        $arg = func_get_args();
        $qArg = func_num_args();
        $media = 0;

        for($cont=0; $cont<$qArg; $cont++){
            $media += $arg[$cont];
        }
        $media /= $qArg;
        return $media;
    }
?>