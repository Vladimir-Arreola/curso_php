<?php

$alex = array('telefono' => '3841013504', 'edad' => 25, 'apellido' => 'Falcao', 'pais' => 'Mexico');

$alex['telefono'] = '101010';

echo 'El télefono de Alex es: ' . $alex['telefono'] . '<br>';
echo $alex['edad']  . '<br>';
echo $alex['apellido']  . '<br>';
echo $alex['pais']  . '<br>';

?>