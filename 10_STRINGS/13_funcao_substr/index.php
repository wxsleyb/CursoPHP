<?php

    $str = "Esta é a minha string";

    $minha = substr($str, 10, 5); // string pai, indice inicial, comprimento da palavra

    echo $str . "<br>";

    echo $minha . "<br>";

    $str2 = "Testando esta string abc";

    $novaString = substr($str2, 8);

    echo $novaString . "<br>";

    $novaString2 = substr($str2, 8, -3);

    echo $novaString2 . "<br>";


