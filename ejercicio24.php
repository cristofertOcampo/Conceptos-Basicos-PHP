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

$objAlumno = new persona(""); //instancia o creacion de un objeto
$objAlumno -> asignarNombre("Cristofert"); //Llamando un metodo
    
$objAlumno2 = new persona(""); 
$objAlumno2 -> asignarNombre("Pedro");
$objAlumno2 -> imprimirNombre();

echo $objAlumno -> nombre; //Imprimir una propiedad  
echo $objAlumno2 ->mostrarEdad(); //Private
echo $objAlumno2 -> altura; //Iprotected

?>