<?php

    $arr = [1,2,4,6,10,16,20,30,9,4,2];

    function soma($a,$b){
        return $a + $b;
    }

    function subtracao($a,$b){
        return $a - $b;
    }

    $resultado = array_reduce($arr, "soma");

    echo "$resultado <br>";

    $resultado2 = array_reduce($arr, "subtracao");

    echo "$resultado2 <br>";
    












