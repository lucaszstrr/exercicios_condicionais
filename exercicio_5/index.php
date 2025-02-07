<?php 

    $anoNasc = readline("Digite o ano de nascimento: ");
    $idade = 2025 - $anoNasc;

    if($idade >= 16 && $idade < 18){
        echo "Você tem $idade anos e já pode votar!" .PHP_EOL;
    }elseif($idade >= 18){
        echo "Você tem $idade anos, pode votar e tirar a CNH!" .PHP_EOL;
    }elseif($idade < 16){
        echo "Você tem $idade anos, ainda não pode votar!" .PHP_EOL;
    }