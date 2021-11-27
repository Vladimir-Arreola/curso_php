<?php 

echo $_POST['nombre'];
$_SESSION["error"] = "";

    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        if(strlen($nombre) != 0) {
            echo 'La variable no está vacía';
            unset($_SESSION["error"]);
        }else{
            echo 'Variable está vacía';
            session_start();
            $_SESSION["error"] = "<script>alert('Usuario desconocido');</script>";
            header("Location:index.php");
        }
    }else{
        echo "Variable no definida";
    }

   
    $correo = $_POST['correo'];

    print_r($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Formulario</title>
</head>
<body>
    <h1>Usuario registrado</h1>
    Usuario: <?php echo $nombre?>
    Correo: <?php echo $correo?>
</body>
</html>