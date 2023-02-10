<?php

$letras=["A","B","C","D","E","F","G","H","I"];

function ordenLetras ($array) {
    $logintudArray=sizeof($array);
    return $logintudArray;
}

echo ordenLetras($letras);
echo "<br>";

function showRandom ($array) {
    $longitud = sizeof($array);
    $randomPosition = rand(0, $longitud);
    return $array[$randomPosition];
}

echo showRandom ($letras);

function arrayInverso($array){
    array_reverse($array);
    return "array";
}


?>