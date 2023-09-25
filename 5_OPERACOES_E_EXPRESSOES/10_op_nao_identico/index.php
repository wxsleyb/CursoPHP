<?php


    function verificaSeNaoEhIdentico($a, $b){
        if($a !== $b){
            echo "Não são idênticos <br>";
        } else {
            echo "São idênticos <br>";
        }
    }

    verificaSeNaoEhIdentico(12,"12");
    verificaSeNaoEhIdentico(1112,12);
    verificaSeNaoEhIdentico(12,12);
    verificaSeNaoEhIdentico("oi","oi");
    verificaSeNaoEhIdentico(10,"oi");

