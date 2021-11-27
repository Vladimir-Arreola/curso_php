<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Alumno</title>
</head>
<body>
    <form action="guardar_alumno.php" method="post">
        <input type="text" name="codigo" id="codigo" placeholder="Ingresa el codigo"> <br>
        <input type="text" name="nombre" id="nombre" placeholder="Ingresa el nombre"> <br>
        <input type="text" name="paterno" id="paterno" placeholder="Ingresa el paterno"> <br>
        <input type="text" name="materno" id="materno" placeholder="Ingresa el materno"> <br>
        <input type="text" name="telefono" id="telefono" placeholder="Ingresa el telefono"> <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>