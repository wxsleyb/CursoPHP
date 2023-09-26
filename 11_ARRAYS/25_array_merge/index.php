<?php

    $arr1 = [1,2,3];
    $arr2 = [10,40,90];
    $arr3 = [2.5,4.5,6.5];

    $arrMerge = array_merge($arr1, $arr2, $arr3);

    
    print_r($arrMerge);
    echo "<br>";

    sort($arrMerge);
    print_r($arrMerge);

