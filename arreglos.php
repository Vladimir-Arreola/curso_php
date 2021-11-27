<?php

$semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

$semana[7] = "Ureaaaa";

foreach($semana as $sema){
    echo '['. $sema .']';
}

$arreglo = array('Cadenas de texto', 1, array('Ureaaa', 'O yira', 'Tuku tu'), false);

echo $arreglo[3];

?>