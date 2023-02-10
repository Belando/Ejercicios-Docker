<?php

    function test(array $array, string $string) {

        return "esto es un array";
    }

    test(["string"], "string");

    function suma(float $a, int $b):float {

        return $a + $b;
    }

    var_dump(suma(1,2));
    var_dump(suma(1.5,2.5)); //Nos devuelve el primer numero entero ignora el decimal

    $a = "string";
    $a = "jasjas";

    function test2() {

        global $a;
    }

?>