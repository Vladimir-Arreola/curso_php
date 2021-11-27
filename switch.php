<?php

    $dia = 'Sabado';

    switch($dia){
        case 'Sabado':
           echo 'Saturday';
            break;
        
            case 'Domingo':
            echo 'Sunday';
            break;
        
            default:
                echo 'That day doesnt exist';
                break;
            }

    if ($dia == 'Sabado') {
        echo "Feliz Sábado";
    }else if($dia == 'Domingo'){
        echo "Feliz domingo";
    }
?>