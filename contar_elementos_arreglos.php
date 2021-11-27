<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
    'Junio', 'Julio' , 'Agosto', 'Septiembre', 'Octubre', 'Noviembre',
    'Diciembre'
);

echo count($meses) . '<br>';

$ultimo_mes = count($meses) - 1;
echo $meses[$ultimo_mes] . '<br>';

$cuenta_mes = 0;
while($cuenta_mes<count($meses)){
    echo '[' .$meses[$cuenta_mes] .']';
    $cuenta_mes++;
}

?>
