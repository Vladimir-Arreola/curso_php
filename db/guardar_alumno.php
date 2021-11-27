<?php 

    include "connection.php";

    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];
    $paterno = $_POST["paterno"];
    $materno = $_POST["materno"];
    $telefono = $_POST["telefono"];

    if ($conexion) {
       //Podemos trabajar
       if(guardarAlumno($codigo, $nombre, $paterno, $materno, $telefono, $conexion)){
           header("Location:alumnos.php");
       }else{
           echo mysqli_error($conexion);
       }
    }else{
        echo "No me puedo conectar";
    }

   

    function guardarAlumno($codigo, $nombre, $paterno, $materno, $telefono, $conexion){
        $sql = "INSERT into alumno(codigo, nombre, paterno, materno, telefono) VALUES ('$codigo', '$nombre', '$paterno', '$materno', '$telefono')";

        if(mysqli_query($conexion, $sql)) {
            return true;
        }else{
            return false;
        }
    }

?>