<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlaces</title>
</head>
<body>
    <?php
        $nombre = base64_encode("Erendira");
        echo "Presiona el siguiente enlace"; 
        echo '<a href="recibir_datos.php?nombre='.$nombre.'">Continuar</a>';
    ?>
</body>
</html>