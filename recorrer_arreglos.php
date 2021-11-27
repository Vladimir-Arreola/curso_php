<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
    'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre',
    'Diciembre'
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Foreach</title>
</head>

<body>

    <h1>Meses del año</h1>

    <div class="container-xl">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Mes</th>
                    <th>Ventas</th>
                </tr>
            </thead>

            <tbody>
                
                    <?php 
                        foreach($meses as $mes){
                            echo '<tr> <td>' . $mes . '</td> <td>' . rand() . '</td> </tr>';
                        }
                    ?>
                
            </tbody>
        </table>
    </div>
    
    <script src="js/bootstrap.js"></script>
</body>

</html>