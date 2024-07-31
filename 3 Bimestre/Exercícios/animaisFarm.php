<?php 
// exercicío 5

    function animais($galinhas, $vacas, $porcos){
        $galinhas = $galinhas * 2;
        $vacas = $vacas * 4;
        $porcos = $porcos * 4; 
    
        $soma = $galinhas + $vacas + $porcos;

        echo $soma;
    }   

    animais(2,3,5)

?>