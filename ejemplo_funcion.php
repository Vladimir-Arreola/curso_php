<?php

use function PHPSTORM_META\type;

function areaTriangulo($base, $alutra){
    $resultado = ($base * $alutra) / 2;
    return $resultado;
}

$resultado = areaTriangulo(10, 20);

echo 'El triangulo tiene un area de ' . $resultado . ' metros cuadrados';

?>