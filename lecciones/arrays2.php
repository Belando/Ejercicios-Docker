<?php

echo "<h1>"."ARRAYS2"."</h1>";
echo "<br>";

$array = [
    "a" => 1,
    3 => 2,
    0 => 56,
    "x" => 42
];

$valores = [
    1,
    2,
    3,
    4,
    5,
    6
];

echo $array[0];
echo "<br>";

var_dump ($array[3]);
echo "<br>";

$array["num_regletas"]=10; //Agregar nuevo elemento
echo "<br>";

var_dump ($array);
echo "<br>";

unset($valores["y"]); //Borrar elemento

foreach($valores as $key => $valor){
    echo "<h5>".$key."-".$valor."</h5>";
}


?>