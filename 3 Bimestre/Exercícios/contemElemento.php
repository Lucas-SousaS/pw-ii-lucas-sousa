<?php 

    function contemElemento($array, $elemento){
        foreach($array as $index){
            echo $index;
        }
    }

    contemElemento([1,2,4,4], 2)

?>