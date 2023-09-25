<?php

    $carro = ['marca' => 'Ferrari', 'km'=> 10000, 'cor' => 'Vermelho'];

    echo $carro['marca'];
    echo "<br>";
    print_r($carro);
    echo "<br>";
    echo $carro['km'];

    $arrAssoc = ['chave'=>'valor', 'bool'=> true];

    echo "<br>";
    print_r($arrAssoc);
    echo "<br>";
    $marca = $carro['marca'];
    $cor = $carro['cor'];

    echo "O carro é da marca $marca e é da cor $cor";
