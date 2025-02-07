<?php

    $valorProduto = readline("Digite o valor do produto: R$");
    $formaPagamento = readline("Digite a forma de pagamento: [1]Dinheiro - [2]Cartão - [3]Parcelado 2x - [4]Parcelado 3x:  ");

    if($formaPagamento === '1'){
        
        $desconto = $valorProduto * 0.1;
        $valorPago = $valorProduto - $desconto;
        echo "O valor a ser pago é R$$valorPago" .PHP_EOL;

    }elseif($formaPagamento === '2'){

        $desconto = $valorProduto * 0.05;
        $valorPago = $valorProduto - $desconto;
        echo "O valor a ser pago é R$$valorPago" .PHP_EOL;

    }elseif($formaPagamento === '3'){

        echo "O valor a ser pago é R$$valorProduto" .PHP_EOL;

    }elseif($formaPagamento === '4'){

        $juros = $valorProduto * 0.1;
        $valorPago = $valorProduto + $juros;
        echo "O valor a ser pago é R$$valorPago" .PHP_EOL;

    }