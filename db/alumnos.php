<table border="1">
<a href='add_alumno.php'>Agregar</a>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Telefono</th>
        <th>Eliminar</th>
    </tr>


<?php 
include "connection.php";

if(!$conexion){
    echo "Error para conectarme: " .mysqli_error($conexion);
}else{
    //Trabajamos con los datos
    $sql = "SELECT * FROM alumno";
    $resultados = mysqli_query($conexion, $sql);

    if (!$resultados) {
        echo "Error encontrado: " . mysqli_error($conexion);
    }else{
        echo "<tr>";
        while($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
            echo "<td>" .$fila["codigo"] . "</td>";
            echo "<td>" .$fila["nombre"] ."</td>";
            echo "<td>" .$fila["paterno"] ."</td>";
            echo "<td>" .$fila["materno"] ."</td>";
            echo "<td>" .$fila["telefono"] ."</td>";


?>

<td><a href="eliminar_alumnos.php?codigo=<?php echo $fila['codigo']?>"> Eliminar</a></td></tr>


    
<?php echo $fila["codigo"]; }}} ?>
    
</table>