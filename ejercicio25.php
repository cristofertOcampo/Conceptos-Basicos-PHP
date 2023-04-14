<?php

class persona{
    public $nombre; //propiedades persona
    private $edad;
    protected $altura;

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

class trabajador extends persona{
    public $puesto; //Propiedad Nueva

    public function PresentarseComoTrabajador(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }
}

$objTrabajador = new trabajador(""); //instancia o creacion de un objeto
$objTrabajador -> asignarNombre("Cristofert Ocampo"); //Llamando un metodo
$objTrabajador -> puesto = "Programador";
$objTrabajador -> PresentarseComoTrabajador();


?>