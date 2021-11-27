<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
    'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre',
    'Diciembre'
);

$numeros = array(1, 254, 30, 45, 867, 9999);

rsort($numeros);
// sort($meses); 
// rsort($meses);

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
                    <th>Numero</th>
                </tr>
            </thead>

            <tbody>
                
                    <?php 
                        foreach($numeros as $numero){
                            echo '<tr> <td>' . $numero . '</td> </tr>';
                        }
                    ?>
                
            </tbody>
        </table>
    </div>
    
    <script src="js/bootstrap.js"></script>
</body>

</html>