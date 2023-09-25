<?php


    $str1 = "Esta string é muito grande";
    $str2 = "Esta não";

    echo "A string 1 tem ". strlen($str1) . " letras <br>";
    echo "A string 2 tem ". strlen($str2) . " letras <br>";

    $len1 = strlen($str1);
    $len2 = strlen($str2);

    if($len1 > $len2){
        echo " A string 1 é maior que a string 2";
    } else {
        echo " A string 2 é maior que a string 1";
    }




