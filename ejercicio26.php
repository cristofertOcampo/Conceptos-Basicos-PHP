<?php

class persona{
    public $nombre; //propiedades persona
    private $edad;
    protected $altura;

    function __construct($nuevoNombre){
        $this-> nombre=$nuevoNombre;
    }

    public function asignarNombre($nuevoNombre){ //acciones o metodos
        $this-> nombre=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola soy".$this->nombre;
    }

    public function mostrarEdad(){
        $this->edad=19;
        return $this->edad;
    }
}

$objAlumno = new persona("Cristofert Ocampo"); //instancia o creacion de un objeto
$objAlumno -> imprimirNombre(); //Llamando un metodo

?>