<?php

    function saludo($name, $apellidos){
        return "Mi nombre es ".$name." ".$apellidos;
    }

    echo saludo("El bobo", "Jeroni");
    echo "<br>";

    function suma($num1, $num2){
        return $num1 +$num2;
    };

    echo suma(3, 4);
    echo "<br>";

    function hacerZumo($zumo = "pera"){
        return "Su zumo de "." ".$zumo." está listo";
    };

    echo hacerZumo();
    echo "<br>";

    echo hacerZumo("bobo");
    echo "<br>";
    echo "<br>";

    function añadirPlatos($platos, $plato){

        $platos[]= $plato;
        return $platos;
    };

    var_dump(añadirPlatos([1,2,3,4],6));

    //Var_dump no se utiliza, lo usamos para que pueda mostrar el array pero se usa ECHO

    
?>