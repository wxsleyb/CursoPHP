<?php

    $j = 0;
    $nome = "Wesley";

    for($i = 0; $i < 10; $i++){
        echo "Testando for $i <br>";

        if($i ==4){
            echo "$nome <br>";
        }

        if($i == 8){
            break;
        }


    }

    echo "<br> EX1 <br>";
    $arr = [];

    for($i= 1; $i <= 10; $i++){

        array_push($arr,$i);
    }

    print_r($arr);

    echo "<br> EX2 <br>";

    $arr1= [];

    for($i = 10; $i <= 20; $i++){
        array_push($arr1, $i);
    }

    print_r($arr1);

    for($i =0; $i < count($arr1); $i++){
        if($arr1[$i] % 2 != 0){
            echo "Número ímpar: $arr1[$i] <br>";
        }
    }

