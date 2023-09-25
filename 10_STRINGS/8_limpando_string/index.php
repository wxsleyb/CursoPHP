<?php

    $str1 = "    Matheus  ";

    echo "Esta é a string1: $str1. <br>";
    // limpa espaços a esquerda e direita
    $str1Limpa = trim($str1);

    echo "Esta é a string1: $str1Limpa. <br>";
    //limpa espaços a direita
    $str1Limpa2 = rtrim($str1);

    echo "Esta é a string1: $str1Limpa2. <br>";

    //limpa espaços a esquerda
    $str1Limpa3 = ltrim($str1);

    echo "Esta é a string1: $str1Limpa3. <br>";
  

