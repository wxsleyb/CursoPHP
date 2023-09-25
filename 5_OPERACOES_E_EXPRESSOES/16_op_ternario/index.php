<?php

    function verificarAcesso($idade, $autorizacao){
        
        if($idade >= 18 && $autorizacao == true){
            return "Acesso autorizado";
        } else if ($idade <= 18){
            return "Acesso negado. Idade mínima requerida: 18 anos.";
        } else {
            return "Acesso negado. Autorização necessária.";
        } 
    }
    
    verificarAcesso(18, true);
    verificarAcesso(16, false);
    verificarAcesso(20, false);