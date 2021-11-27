<?php 
    $paises = array(
        'Mexico', 'USA', 'Peru', 'Suiza', 'Chile', 'Argentina', 'Peru', 'Japon'
    );

    echo '<h1>Break</h1>';

    foreach ($paises as $pais){
        
        if($pais == 'USA'){
            break;
        }

        echo $pais .'<br />';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break y Continue</title>
</head>
<body>
    <h1>Países Latinos (Continue)</h1>

    <?php

        foreach($paises as $pais){

            if($pais == 'USA' || $pais == 'Suiza' || $pais == 'Japon'){
                continue;
            }

            echo $pais . '<br />';

        }

    ?>

</body>
</html>