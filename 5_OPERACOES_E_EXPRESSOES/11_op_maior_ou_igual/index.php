<?php


    function maiorOuIgual($a, $b){
        if($a >= $b){
            echo "$a é maior ou igual que $b <br>";
        } else {
            echo "$a não é maior ou igual que $b <br>";
        }
    }

    maiorOuIgual(12,13);
    maiorOuIgual(1112,12);
    maiorOuIgual(12,12);
    maiorOuIgual(14, 12);
    maiorOuIgual(10,1000);

