<?php

    $nota1 = readline();
    $nota2 = readline();

    $media = ($nota1 + $nota2)/2;

    if($media >= 60){
        echo "O aluno foi aprovado com média $media" .PHP_EOL;
    }else{
        echo "O aluno não foi aprovado. A média foi de $media" .PHP_EOL;
    }