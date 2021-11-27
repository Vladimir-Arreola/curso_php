<?php
include_once 'carga_bootstrap.php';

$nombre = 'Vladex';

function saludar($nombre)
{
    echo 'Hola ' . $nombre;
}

// saludar('Ismaaaaa');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion</title>
</head>

<body>

    <h1 class="mb-3">Formulario de Registro</h1>

        <div class="">
            <input type="text" name="campos" id="campo" class="form-control">
        </div>
        
        <button class="btn btn-primary mt-2" onclick="return saludar( document.getElementById('campo').value )">Ir</button>


    <script>

        saludar = (name) => alert('Hola ' + name);
    </script>
</body>

</html>