<?php


    $frase = "Testando o explode";

    $fraseArray = explode(" ", $frase);

    echo print_r($fraseArray);
    echo "<br>";
    
    $fraseArray2 = explode(",", $frase);

    echo print_r($fraseArray2);
    echo "<br>";

    $fraseB = "Carro, Avião, Barco, Navio";

    $fraseBArray = explode(",", $fraseB);

    echo print_r($fraseBArray);
    echo "<br>";


    for($i = 0; $i< count($fraseBArray); $i++){
        echo "$fraseBArray[$i] <br>";
    }

    



