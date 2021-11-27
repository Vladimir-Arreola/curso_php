<?php

function saludo($nombre){
    return "Salduo" . $nombre . "<br>";
}

echo saludo('Vladex');
echo saludo('QUico');
echo saludo('Villagran');

function sumar($num1, $num2){
    $resultado = $num1 + $num2;
    echo "El resultado de la suma de $num1 y $num2 es igual a $resultado <br>";

}

function restaReturn($num1, $num2){
    $resultado = $num1 - $num2;
    return $resultado;
}

sumar(5, 10);
sumar(20, 40);
sumar(30, 1);


$resultado = restaReturn(15, 5);

?>