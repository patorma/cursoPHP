<?php
require_once('persona.php');
require_once('respiration.php');

    class Employe extends Person implements Respiration{
        private $position;
        private $schedule;

    function run(){
        echo 'Empleados corriendo';
    }
    function cook(){

    }
    public function nasalCavity(){
        
    }
    public function mouth (){
        
    }
    public function trachea(){
        
    }
    public function bronchi(){
        
    }
    public function lungs(){
        
    }
    }
?>