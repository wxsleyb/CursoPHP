<?php

    $arr = [

        'Wesley' => 18,
        'Pedro' => 18,
        'Maria' => 30,
        'Bernardo' => 2,
        'Anna' => 16,
    ];

    asort($arr);

    print_r($arr);

    echo "<br>";
    $arr2 = [

        'Wesley' => 18,
        'Pedro' => 18,
        'Maria' => 30,
        'Bernardo' => 2,
        'Anna' => 16,
    ];

    arsort($arr2);

    print_r($arr2);
    echo "<br>";

    ksort($arr2);
    print_r($arr2);

    echo "<br>";

    krsort($arr2);
    print_r($arr2);