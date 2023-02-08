<?php
$javascript1 = array("php", "laravel", "Funciones", "Arrays");
$javascript2 = array("Objetos", "Arrays", "strings");
function repeatedElements($array1, $array2) {
    $repeated = array();
    foreach ($array1 as $element) {
        if (in_array($element, $array2)) {
            array_push($repeated, $element);
        }
    }
    return $repeated;
}
$repeated = repeatedElements($javascript1, $javascript2);
if (!empty($repeated)) {
    echo "Los siguientes elementos se repiten: \n";
    print_r($repeated);
} else {
    echo "No se repiten elementos en ambos arrays.";
}
?>