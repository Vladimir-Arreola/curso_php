<?php

$host = "localhost";
$user = "root";
$pass = "";
$baseDatos = "modulo_3";

$conexion =  mysqli_connect($host, $user, $pass, $baseDatos);

if(!$conexion){
    // echo "NOO me conecte";
}else{
    // echo "SI ME CONECTE";
}

?>