<?php

    $nota1 = readline("Digite a nota 1 do aluno: ");
    $nota2 = readline("Digite a nota 2 do aluno: ");

    $media = ($nota1 + $nota2)/2;

    if($media >= 60){
        echo "O aluno foi aprovado com média $media!" .PHP_EOL;
    }else{
        echo "O aluno não foi aprovado. A média foi de $media." .PHP_EOL;
    }