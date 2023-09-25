<?php


    function menorOuIgual($a, $b){
        if($a <= $b){
            echo "$a é menor ou igual que $b <br>";
        } else {
            echo "$a não é menor ou igual que $b <br>";
        }
    }

    menorOuIgual(12,13);
    menorOuIgual(1112,12);
    menorOuIgual(12,12);
    menorOuIgual(14, 12);
    menorOuIgual(10,1000);

