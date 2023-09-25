<?php


    function verificaSeEhIdentico($a, $b){
        if($a === $b){
            echo "São idênticos <br>";
        } else {
            echo "Não são idênticos <br>";
        }
    }

    verificaSeEhIdentico(12,"12");
    verificaSeEhIdentico(1112,12);
    verificaSeEhIdentico(12,12);
    verificaSeEhIdentico("oi","oi");
    verificaSeEhIdentico(10,"oi");


    








    



