<?php
    $a = "Oi";
    $num = 12;
    if(is_string($a)){
        echo "$a é uma string";
    }
    echo "<br>";
    if(is_string($num)){
        echo "$num é uma string";
    }else{
        echo "$num não é uma string";
    }