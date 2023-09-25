<?php

    $palavra = "carro";

    echo "$palavra global 1 <br>";


    if(5>2){
        $palavra = "moto";

        echo "$palavra if <br>";
    }

    echo "$palavra global 2 <br>";

    function funcao(){
        $palavra = "bicicleta";
        echo "$palavra local <br>";
    }

    funcao();

    function testandoGlobal(){
        global $palavra;
        echo "$palavra global funcao <br>";

    }
    testandoGlobal();


    

