<?php

    $valorProduto = readline("Qual o valor do produto ? R$");

    if($valorProduto < 20){

        $lucro = $valorProduto * 0.45;
        $valorVenda = $valorProduto + $lucro;
        echo "O valor de venda deverá ser R$$valorVenda" .PHP_EOL;

    }elseif($valorProduto >= 20){

        $lucro = $valorProduto * 0.3;
        $valorVenda = $valorProduto + $lucro;
        echo "O valor de venda deverá ser R$$valorVenda" .PHP_EOL;

    }