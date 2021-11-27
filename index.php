<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>

<body>
    <h1>Formulario de libros</h1>
    <?php
    // session_start();

    //     if(isset($_SESSION["error"])){
    //         echo $_SESSION["error"];
    //     }
        
    ?>
    <form action="instancias.php" method="post" onsubmit="return validaFormulario();">

        <table>
            <tr>
                <td>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre...">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="paginas">Paginas</label>
                    <input type="number" name="paginas" id="paginas" placeholder="Ingresa tus paginas...">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Enviar Datos">
                </td>
            </tr>
        </table>
    </form>
    <script src="js/validaciones.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>