<?php
    class Pessoa{
        function falar(){
            echo "Olá pessoal!";
        }
    }

    $Wesley = new Pessoa();

    $Wesley->nome= "Wesley";

    echo $Wesley->nome;
    echo "<br>";

    $Wesley->falar();