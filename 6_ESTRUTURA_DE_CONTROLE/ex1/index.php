<?php

    function compararNumeros($a, $b){
        
        if($a > $b){
            return "O primeiro número é maior.";
        } else if($a < $b){
            return "O segundo número é maior.";
        } else {
            return "Os números são iguais.";
        }
    }
    
    compararNumeros(1, 12);
    compararNumeros(12,12);
    compararNumeros(12, 1);
