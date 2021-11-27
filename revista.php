<?php

include "poo.php";

class Revista extends Libro{
    private $numeroEmision;
    public static $empresa = "Empresa INC.";

    public function setNumeroEmision($numero){
        $this->numeroEmision = $numero;
    }
    
}


?>