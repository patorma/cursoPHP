<?php
declare(strict_types=1);
//establece 

require_once('persona.php');
require_once('client.php');
require_once('employe.php');
require_once('provider.php');
/* $jose = new Person(); */
/* $jose->name = "Jose";
$jose->lastName = "Lopez"; */
/*$jose->sex = "Jose";
$jose->nationality = "Jose";
$jose->age = "Jose";*/

$luren= new Client();
$luren->setName('Luren');


$gael = new Employe();
$sudoku = new Provider();
$sudoku->setName('Sudoku');
$gael->setName('Gael');

$luren->say($gael);
//S$gael->run();
Person::$color = "Azul";
//funcion variable
 /*function operation(){
     echo 'Funcion variable';
 }
 $variable ='operation';
 $variable();*/
/* $operation =function($num1,$num2){
   return $num1+$num2;
}; */

//echo 'El resultado es: '.$operation(15,5);
//array indexado
/*$animals = array('Gato','Perro','Panda');
//array asociativo
$datas = array('Nombre'=>'Marines','Apellido'=>'Martinez','Sexo'=>'Femenino');

foreach($animals as $animal){
    echo "El animal es $animal \n<br>";
}


foreach($datas as $clave =>$valor){
    echo "La clave es $clave y el valor es $valor  \n<br>";
}*/
?>