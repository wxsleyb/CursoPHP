<?php

    function teste(){
        $a = 0;
        $a++;


        echo "$a <br>";
    }

    teste();

    
    function testeStatic(){
        static $a = 0;
        $a++;


        echo "$a static <br>";
    }

    testeStatic();
    testeStatic();
    testeStatic();
    testeStatic();
    testeStatic();
    testeStatic();


    

