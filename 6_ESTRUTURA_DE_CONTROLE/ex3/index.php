<?php
    
    
    function calcularDesconto($valor, $categoria){
        
        
        if($categoria == "eletrônicos"){
            return $valor - ($valor * 10/100);
        }
        
        else if($categoria == "vestuário"){
            return $valor - ($valor * 20/100);
        }
        
        else if($categoria == "alimentos"){
            return $valor - ($valor * 5/100);
        }
        
        else{
            return $valor;
        }
    }
    
    calcularDesconto(10, "eletrônicos");
    calcularDesconto(10, "vestuário");
    calcularDesconto(10, "alimentos");
    calcularDesconto(10, "");
    
