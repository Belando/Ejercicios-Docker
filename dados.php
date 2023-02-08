<?php

    function lanzarDados($numDados, $numCaras){
        $resultado = 0;
        for($i = 0; $i < $numDados; $i++){
            $lanzamiento = rand(1, $numCaras);
            $resultado = $resultado + $lanzamiento;
            echo "<div>".$lanzamiento."</div>";
        }
        
        return "TOTAL ".$resultado;
    };

    echo lanzarDados(5 ,6);

?>