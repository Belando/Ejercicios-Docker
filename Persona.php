<?php
    class Persona{

        public $nombre = "Fran";
        public $apellido = "Carrión";
        private $dni = "12345678S";
        public $telefono = 666777888;
        
    
        public function __construct($nombre, $apellido, $dni, $telefono)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->dni = $dni;
            $this->telefono = $telefono;
            
        }

        public function getName (){
            return $this->nombre;
        }
        public function setName(string $name){
            $this->nombre = $name;
        }
    
        public function getSurname (){
            return $this->apellido;
        }
        public function setSurname(string $surname){
            $this->apellido = $surname;
        }
    
        public function getDni (){
            return $this->dni;
        }
        public function setDni(string $newDni){
            $this->dni = $newDni;
        }

        public function getPhone (){
            return $this->telefono;
        }
        public function setPhone(int $phone){
            $this->telefono = $phone;
        }

    }

    class Trabajador extends Persona{

        public $salario = 15000;
        public $puesto = "Programador";
    
    public function getJob (){
        return $this->puesto;
    }
    public function setJob(string $job){
        $this->puesto = $job;
    }

    public function getSalary (){
        return $this->puesto;
    }
    public function setSalary(int $salary){
        $this->salario = $salary;
    }

    public function Mensaje(){
        return $this->nombre." tiene un trabajo en ".$this->puesto." con un salario de: ".$this->salario;
    }

};

$trabajador1 = new Trabajador("Jero", "Bobo", "12345678M", 666555444);

var_dump ($trabajador1->Mensaje())

?>