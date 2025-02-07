<?php

    $numero = readline();

    if($numero >= 30 && $numero <= 90){
        echo "O número está dentro da faixa de 30 a 90" .PHP_EOL;
    }elseif($numero > 120){
        echo "O número é maior que 120" .PHP_EOL;
    }else{
        echo "O número não está dentro da faixa" .PHP_EOL;
    }

    //