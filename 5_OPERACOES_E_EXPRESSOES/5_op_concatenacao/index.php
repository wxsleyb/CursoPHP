<?php

    function concatenacao($palavra1, $palavra2){
        echo "$palavra1" . " " . "$palavra2";
        echo "<br>";
    }

    concatenacao("oi", "tudo bem");
    concatenacao("bom", "dia");
    concatenacao("curso", "php");

    $marca = "Audi";
    $cor = "cinza";
    $vel_max = 200;
    concatenacao($marca, $cor);
    echo "O carro da ". $marca . " da cor ". $cor . " chega a velocidade de ". $vel_max . " km/h";
    







    



