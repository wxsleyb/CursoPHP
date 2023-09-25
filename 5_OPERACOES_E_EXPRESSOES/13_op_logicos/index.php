<?php


    echo "Operador AND <br>";

    if (5 > 10 && 10 > 5){
        echo "É true <br>";
    } else {
        echo "É false <br>";
    }

    if (20 > 10 && 10 > 5){
        echo "É true <br>";
    } else {
        echo "É false <br>";
    }

    if (15 > 10 && 15 > 5){
        echo "É true <br>";
    } else {
        echo "É false <br>";
    }

    echo "Operador OR <br>";

    if (5 > 10 || 10 > 5){
        echo "É true <br>";
    } else {
        echo "É false <br>";
    }

    if (20 > 10 || 10 < 5){
        echo "É true <br>";
    } else {
        echo "É false <br>";
    }

    echo "Operador NOT <br>";

    if (!(5 > 10 || 10 > 5)){
        echo "É true <br>";
    } else {
        echo "É false <br>";
    }

    if (!(20 > 10 && 10 < 5)){
        echo "É true <br>";
    } else {
        echo "É false <br>";
    }

    if (!(10 == 10 || 10 !== 5)){
        echo "É true <br>";
    } else {
        echo "É false <br>";
    }