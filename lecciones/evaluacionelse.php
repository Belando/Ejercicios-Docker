<?php

    $nota = -8;
    // $b = 2;

    echo "<br>";
    if ($nota < 0 || $nota > 10){
        echo "Debe introducir un valor entre 0 y 10";
    }elseif ($nota < 5){
            echo "Estás suspenso";
    }elseif ($nota >= 5 && $nota <= 7){
        echo "Tienes un suficiente";
    }elseif ($nota >= 8 && $nota <= 9){
        echo "Tienes un notable";
    }else{
        echo "Tienes un sobresaliente";
    }


?>