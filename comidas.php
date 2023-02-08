<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    $comidas = [

    "Plato1" => [
        "título" => "Patatas bravas",
        "tipo" => "Entrante",
        "comensales" => "Para 2",
        "precio" => "8€"
    ],
    "Plato2" => [
        "título" => "Ensalada de pasta",
        "tipo" => "Primero",
        "comensales" => "Para 1",
        "precio" => "12€"
    ],
    "Plato3" => [
        "título" => "Solomillo Wellington",
        "tipo" => "Segundo",
        "comensales" => "Para 2",
        "precio" => "20€"
    ],
];



echo "<h1>"."Menu Mesón JERONI"."</h1>";

foreach($comidas as $key => $plato){
    // echo "<h3>".$plato["título"]."</h3>"."<li>".$plato["tipo"]."</li>"."<li>".$plato["comensales"]."</li>"."<li>".$plato["precio"]."<br>"."</li>";

    echo "<ol>"."<h3>".$plato["título"]."</h3>";
    echo "<ul>"."<b>"."tipo: "."</b>".$plato["tipo"]."</ul>";
    echo "<ul>"."<b>"."comensales: "."</b>".$plato["comensales"]."</ul>";
    echo "<ul>"."<b>"."precio: "."</b>".$plato["precio"]."<br>"."</ul>";
    echo "</ol>";
}

?>
    
</body>
</html>

