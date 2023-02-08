

<?php

$numbers=[0,1,2,3,4,5,6,7,8,9];

function splitNumbers ($numbers) {
    $pares=[];
    $impares=[];
    foreach ($numbers as $number){
    if ($number % 2 == 0) {
        array_push($pares, $number);
        continue;
    } 
    array_push($impares, $number);
}
// var_dump($impares);
// var_dump(array_merge($pares, $impares));
//     return array_merge($pares, $impares);
$result = [
    "pares"=>$pares,
    "impares"=>$impares
];

return $result;
};

var_dump(splitNumbers($numbers)) 


?>