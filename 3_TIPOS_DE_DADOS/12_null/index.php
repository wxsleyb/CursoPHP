<?php
    echo NULL;

    $nome = NULL;

    if(is_null($nome)){
        echo "O valor $nome é nulo <br>";
    }

    $nome = "Wesley";
    
    if(is_null($nome)){
        echo "O valor $nome é nulo";
    } else {
        echo "O valor $nome não é nulo";
    }