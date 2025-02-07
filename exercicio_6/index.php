<?php

    $valor1 = readline("Digite um valor: ");
    $valor2 = readline("Digite outro valor: "); 

    if($valor1 > $valor2){
        echo "$valor1 é o maior!" .PHP_EOL;
    }elseif($valor2 > $valor1){
        echo "$valor2 é o maior!" .PHP_EOL;
    }elseif($valor1 === $valor2){
        echo "Os valores não podem ser iguais!" .PHP_EOL;
    }

