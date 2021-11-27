<?php
    require "carga_bootstrap.php";

    $a = 25; // Variable externa

    while ($a >= 1) { //Condición
        echo '<h3>' . $a .'</h3>'; //Acciones a realizar
        $a--; // Realizar el incremento o decremento para el ciclo
    }

?>