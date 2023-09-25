<?php


    echo 5/2;

    echo "<br>";

    if (is_float(5/2)){
        echo "É float <br>";
    }

    if (is_string(2 . 3)){
        echo "É string <br>";
    }

    $nome = "Fábio";
    $sobrenome = "Castro";

    $nomeCompleto = $nome . " " . $sobrenome;

    echo $nomeCompleto;
    echo "<br>";


    //ex11
    $a = "5";
    $b = 12;
    $resultado = "5" * 12;

    echo gettype($resultado);
    echo "<br>";
    echo gettype([]);
    echo "<br>";
    echo gettype(12.3);
    echo "<br>";
    echo gettype("oi");
    echo "<br>";

    //ex12
    $a= 3;
    $b = 12;

    $op1 = $a - $b;
    echo $op1;
    echo "<br>";

    $c = 15.9;
    $op2 = $op1 * $c;
    echo $op2;
    echo "<br>";

    $d = 3.5;

    $op3 = $op2 + $d;
    echo $op3;
    echo "<br>";

    $e = 10.9;

    $op4 = $op3 / $e;
    echo $op4;
    echo "<br>";





    



