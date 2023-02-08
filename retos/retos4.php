<?php

function cambiarLetras($string){
    $letrasEspeciales = [
        "á" => "a",
        "é" => "e",
        "í" => "i",
        "ó" => "o",
        "ú" => "u",
        "ñ" => "n",
        "Á" => "A",
        "É" => "E",
        "Í" => "I",
        "Ó" => "O",
        "Ú" => "U",
        "Ñ" => "N",
    ];

    return strtr($string, $letrasEspeciales);
}

$string = "Hola cómo estás, ESPAÑA";

$convertir = cambiarLetras($string);

echo $convertir

?>