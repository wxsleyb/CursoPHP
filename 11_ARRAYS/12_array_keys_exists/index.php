<?php


    $carro = [
        'marca' => 'Ferrari',
        'motor' => '2.4',
        'teto_solar' => true,
        'portas' => 4
    ];

    if(array_key_exists("marca", $carro)){
        echo "A chave existe! <br>";
    } else {
        echo "A chave não existe <br>";
    }

    if(array_key_exists("nome", $carro)){
        echo "A chave existe! <br>";
    } else {
        echo "A chave não existe <br>";
    }


    if(isset($carro['motor'])){
        echo "A chave existe! <br>";
    } else {
        echo "A chave não existe <br>";
    }

    
    if(isset($carro['teste'])){
        echo "A chave existe! <br>";
    } else {
        echo "A chave não existe <br>";
    }









