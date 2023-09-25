<?php
    $a = 11.5;
    $b = "oi";
    if(is_float($a)){
        echo "$a é um numero do tipo float";
    } 
    echo "<br>";
    if(is_float($b)){
        echo "$b é um numero do titpo float";
       
    } else {
        echo "$b não é um numero do tipo float";
    }