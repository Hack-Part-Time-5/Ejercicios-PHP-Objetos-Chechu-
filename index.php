<?php

class Person {
    protected $name = "";
    protected $surname = "";
    protected $age = "";

    static public $contador=0;

    public function __construct($name, $surname, $age){
        $this-> name = $name;
        $this-> surname = $surname;
        $this-> age = $age;
        self::$contador++;        
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

    public function saludo(){
        return "Hola $this->name ¿Como estás hoy?";
    }

    public final function comer(){
        return "$this->name ¿Que deseas comer hoy?";
    }

    public static function valorStatic() {
        return self::$contador;
    }
    
}

class Teacher extends Person {
    public $subject = "";

    public function __construct($name,$surname,$age,$subject){
        parent::__construct($name, $surname, $age);
        $this->subject = $subject;
        
    }

    public function getTeacher(){
        return parent::get_person().", Asignatura: ".$this->subject;
    }

    public function saludo(){
        return "Buenos días profesor $this->name ¿Como está hoy?";
    }

    /* public function comer(){
        return "Buenos días profesor $this->name ¿Que deseas comer hoy?";
    } // En una clase hija no se puede crear una función con mismo nombre que la función en clase padre si ésta está definida como funcion final (línea 35)*/
}

class Student extends Person {
    public $course = "";

    public function __construct($name,$surname,$age,$course){
        parent::__construct($name, $surname, $age);
        $this-> course = $course;
        
    }
       

}

$miPersona1 = new Person("Julia","Garcia",32);
$miPersona2 = new Person("Mario","Beltrán",27);

$miProfesor1 = new Teacher("Agustin","Capablo",40,"Informática");
$miEstudiante1 = new Student("Laura","Ainsa",19,"4º");

$miPersona3 = new Person("Felisa","Gale",72); // Si bien se puede crear un nuevo objeto de la clase Person, no tiene mucho sentido hacerlo ya que se pueden crear otras clases que incorporan mas información, como Studen o Teacher. Si la nueva persona creada no corresponde a Studen o Teacher, lo propio sería crear una nueva clase para esas personas.


// ------------- Ejercicio 1
    //echo "Mi primera persona es ".$miPersona1->name." ".$miPersona1->surname." y su edad es de ".$miPersona1->age." años.\n";     

    //echo "Mi segunda persona es ".$miPersona2->name." ".$miPersona2->surname." y su edad es de ".$miPersona2->age." años.";

// ------------- Ejercicio 2
    //echo "Primera persona  ".$miPersona1->get_person()."\n";
    //echo "Segunda persona  ".$miPersona2->get_person()."\n";

// ------------- Ejercicio 3

    //echo $miPersona1->saludo(); // público

    //echo $miPersona1->getSaludo(); // publico que llama a un privado

// ------------- Ejercicio 4 a 9

echo $miProfesor1->saludo()."\n";

echo $miProfesor1->getTeacher()."\n";

echo Person::$contador."\n"; //Contador de los objetos de clase Person

echo $miProfesor1->saludo(); //Overreading del metodo de saludar




