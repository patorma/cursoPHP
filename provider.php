<?php
require_once('persona.php');

 class Provider extends \Person{
     private $account;
     private $bank;

     function run(){
        echo 'Proveedorcorriendo';
    }
     function sendProducts(){
         //Un atributo de la clase externa se envia como parametro a la clase anonima
         //para que esta ultima lo utilize
        $anonymous=new class($this->account,20) extends Person
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
};//final clase anonima
     }

     
 }


?>