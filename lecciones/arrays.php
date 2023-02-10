<?php

$colores = [['purpura', 'morado'],'azul', 'rojo', 'verde'];

echo $colores[0][1];
echo "<br>";
echo "<br>";

$clase = [
    "alumnos" => [
        "Diego EH?!", "Maria", "El JERO","Mario pateras"
    ],
    "nombre_clase" => "MR.03",
    "aforo" => 10,
    "docentes" => [
        "ana", "david", "pablo", "jose", "dani"
    ],
    "equipamiento" => [
        "tv" => TRUE, 
        "regletas" => [
            "numero" => 10
        ],
    "calefaccion"=> TRUE]
];

echo $clase["nombre_clase"];
echo "<br>";

echo "En la clase ".$clase["nombre_clase"]." existen ".$clase["equipamiento"]["regletas"]["numero"]." regletas"

?>