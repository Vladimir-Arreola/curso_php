<?php

$edad = 18;

$edad = (isset($edad)) ? $edad : 'El usuario no estableció su edad' ;

if (isset($edad2)) {
    $edad2 = $edad;
} else {
    $edad2 = 'El usuario no estableció su edad';
}

print($edad2);

echo $edad;
?>