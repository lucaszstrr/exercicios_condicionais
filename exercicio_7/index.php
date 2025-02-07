<?php

    $idade = readline();

    if($idade >= 5 && $idade <=7){
        echo "Nadador na categoria Infantil A" .PHP_EOL;
    }elseif($idade >= 8 && $idade <= 10){
        echo "Nadador na categoria Infantil B" .PHP_EOL;
    }
    elseif($idade >= 11 && $idade <= 13){
        echo "Nadador na categoria Juvenil A" .PHP_EOL;
    }
    elseif($idade >= 14 && $idade <= 17){
        echo "Nadador na categoria Juvenil B" .PHP_EOL;
    }
    elseif($idade >= 18){
        echo "Nadador na categoria Sênior" .PHP_EOL;
    }
    elseif($idade < 5){
        echo "Não tem idade para participar das categorias" .PHP_EOL;
    }