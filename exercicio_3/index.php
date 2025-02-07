<?php

    $macas = readline();

    if($macas < 12){
        $custoMacas = $macas * 1.3;
        echo "O valor a ser pago é R$$custoMacas" .PHP_EOL;
    }elseif($macas >= 12){
        $custoMacas = $macas * 1;
        echo "O valor a ser pago é R$$custoMacas" .PHP_EOL;
    }
    