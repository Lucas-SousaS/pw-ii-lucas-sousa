<?php 
    $n1 = 0;
    $n2 = 0;

    for ($i = 0; $i < 8; $i++){
        echo $n1;
        echo "<br>";
        $pn = $n1 +$n2;
        $n1 = $n2;
        $pn = $n2;
    }
?>