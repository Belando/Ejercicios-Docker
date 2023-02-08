<p>Esto es el header</p>

<?php

    define('CONSTANTE', 'esto es una constante');
    define('ARRAY_CONSTANT', [1, 2, 3]);

    echo "<h1>Hola Valencia</h1>";


    print_r ("Hola mundo");
    echo "<br>";

    print_r([1, 2, 3]);
    echo "<br>";

    var_dump([1, 2, 3]);
    echo "<br>";

    $nombreVariable = "nombre variable";
    echo "<br>";

    echo $nombreVariable;
    echo "<br>";

    echo ARRAY_CONSTANT[2]." ".ARRAY_CONSTANT[1];
    echo "<br>";

?>

<?php

    echo "Esto es otra etiqueta";
    echo "<br>";
    $zumo = "naranja";
    echo "Esto es zumo de ".$zumo;

    $tipoBooleano = TRUE;
    echo "<br>";

    echo gettype($tipoBooleano);
    echo "<br>";

    echo "PHP version".PHP_VERSION;
    echo "<br>";
    echo "PHP version".PHP_OS;


?>


<p>Esto es el footer</p>