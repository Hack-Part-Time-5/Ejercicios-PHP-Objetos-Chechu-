<?php

class Person {
    private $name = "";
    private $surname = "";
    private $age = "";

    public function __construct($name, $surname, $age){
        $this-> name = $name;
        $this-> surname = $surname;
        $this-> age = $age;
        }
        
    public function get_person(){
        return "Nombre: ".$this->name.", Apellido: ".$this->surname.", Edad: ".$this->age;        
    }

    public function get_name(){
        return $this->name;        
    }

    public function set_person($name, $surname, $age){
        $this-> name = $name;
        $this-> surname = $surname;
        $this-> age = $age;
    }

    private function saludo (){
        return "Hola $this->name ¿Como estás hoy?";
    }

    public function getSaludo (){
        return $this->saludo();
    }
}

$miPersona1 = new Person("Julia","Garcia",32);
$miPersona2 = new Person("Mario","Beltrán",27);


// ------------- Ejercicio 1
    //echo "Mi primera persona es ".$miPersona1->name." ".$miPersona1->surname." y su edad es de ".$miPersona1->age." años.\n";     

    //echo "Mi segunda persona es ".$miPersona2->name." ".$miPersona2->surname." y su edad es de ".$miPersona2->age." años.";

// ------------- Ejercicio 2
    echo "Primera persona  ".$miPersona1->get_person()."\n";
    echo "Segunda persona  ".$miPersona2->get_person()."\n";

// ------------- Ejercicio 3

    //echo $miPersona1->saludo(); // público

    echo $miPersona1->getSaludo(); // publico que llama a un privado