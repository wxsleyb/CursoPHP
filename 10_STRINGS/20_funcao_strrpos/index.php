<?php

    $str = "Tentando encontrar a palavra teste, em uma string que tem teste";


    $palavra = strrpos($str, "teste");

    echo "$palavra <br>";

    $palavra2 = strpos($str, "teste");

    echo "$palavra2 <br>";

    if(strrpos($str, "Java") === false){
        echo "A palavra Java não foi encontrada <br>";
    }

    $palavra3 = substr($str, strpos($str, "teste"), 5);
    echo "$palavra3 <br>";





