<?php

class Libro {
    //Atributos que solo podrán ser accedidos dentro de la clase
    private $titulo;
    private $numeroPaginas;
    public $autores = [];

    //Constructor
    function __construct($tituloLibro, $paginasLibro)
    {   
        $this->titulo = $tituloLibro;
        $this->numeroPaginas = $paginasLibro;
    }

    // Getters
    public function getTitulo(){
        return $this->titulo;
    }

    public function getPaginas(){
        return $this->numeroPaginas;
    }

    
    public function informacionLibro(){
        return "Nombre del Libro: " . $this->titulo . "<br>" . "Numero de paginas: " .$this->numeroPaginas . "<br>";
    }

    //Setters
    public function setPaginas($paginas){
        $this->numeroPaginas = $paginas;
    }

    public function transformarMinuscula($tituloLibro){
        $this->titulo = strtolower($tituloLibro);
    }

}

?>