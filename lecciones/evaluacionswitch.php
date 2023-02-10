<?php

    $nota = 8;
    $insuficiente = $nota >= 0 && $nota < 5;
    $suficiente = $nota >= 5 && $nota < 8;
    $notable = $nota >= 7 && $nota < 9;
    $sobresaliente = $nota >= 9 && $nota < 11;
    $noposible = $nota < 0 || $nota > 10;

    echo "<br>";
    switch($nota){
        case $noposible:
            echo "Debe introducir un valor entre 0 y 10";
            break;
        case $insuficiente:
            echo "Estás suspenso";
            break;
        case $suficiente:
            echo "Estás aprobado";
            break;
        case $notable:
            echo "Tienes un notable";
            break;
        case $sobresaliente;
            echo "Tienes un sobresaliente";
            break;
    }


?>