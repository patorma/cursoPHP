<?php
require_once('persona.php');

class Client extends Person{
    private $common;
    private $email;

function __construct(){
    echo 'Inicio';
    $this->common = '';
    $this->email = 'default@gmail.com';
}



   
    public function getCommon(): int
    {
        return $this->common;
    }

   
    public function setCommon(int $common)
    {
        $this->common = $common;

    }


    public function getEmail():String
    {
        return $this->email;
    }

  
    public function setEmail(String $email)
    {
        $this->email = $email;
       
    }
    function eat(){
        echo parent::talk();
       }

    function run(){
        echo 'Cliente corriendo';
    }
    function __destruct(){
        echo 'Limpieza';
    }
}

?>