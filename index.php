<?php
//creacion de clase anonima
require_once 'persona.php';
$anonymous=new class(10,20) extends Person
{
    private $dividend;
    private $divisor;
    public function __construct($dividend,$divisor){
        $this->see();
    }

    public function run(){
        
    }
    public function divideBy(){
        $plus = $this->dividend+$this->divisor;
        echo 'soy la clase anonima '.$plus;
    }
};

//llamamos a la funcion de la clase anonima
$anonymous->divideBy();
?>