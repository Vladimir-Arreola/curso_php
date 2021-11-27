<?php 

    $meses = array(
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
        'Octubre', 'Noviembre', 'Diciembre'
    ); 


    $vladex = array('telefono' => 3841013503, 'edad' => 22, 'pais' => 'Mexico' );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <h1>Meses</h1>
    <ul>

        <?php 
            // foreach ($meses as $mes){
            //     echo '<li>' .$mes. '</li>';
            // }

            //Recorrer arreglos asociativos
            foreach ($vladex as $dato => $valor){
                echo '<li>' .$dato . ': ' . $valor . '</li>';
            }
        ?>

    </ul>
</body>
</html>