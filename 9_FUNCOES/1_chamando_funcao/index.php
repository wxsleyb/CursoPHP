<?php 
  function soma(){
  $a = 5;
  $b = 4;

  echo $a + $b . "<br>";
  }
  soma();

  function somaComParametro($a,$b){
    echo $a + $b . "<br>";
    print($a + $b);
  }
  
  soma(3,4); 
?> 