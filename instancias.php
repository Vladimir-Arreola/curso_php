<?php

    include "revista.php";

    $titulo = $_POST["nombre"];
    $paginas = $_POST["paginas"];

    if(strlen($titulo) == 0 || $paginas == 0){
        echo "No inicializaste tu libor";
    }else{
        $libroForm = new Libro($titulo, $paginas);
        echo $libroForm->informacionLibro();
    }

    $miLibro = new Libro("It", 600);
    $elFantasmaCanterville = new Libro("El fantasma de Canterville", 320);
    
    echo $elFantasmaCanterville->informacionLibro();
    $elFantasmaCanterville->autores = array("Oscar Wilde");


    $revistaNueva = new Revista("Club Nintendo", 35);
    $revistaNueva->setNumeroEmision(55);

    echo $revistaNueva->informacionLibro();
    echo Revista::$empresa;

?>