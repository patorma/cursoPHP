<?php
declare(strict_types=1);//restricciones de tipo de datos
//establece 


require_once('autoload.php');

(new AutoLoader())->load();


//funcion para recibir todas las clases que no esten incluidas en el archivo
function load($class){
 echo $class;
}
spl_autoload_register('load');//entre parentesis se pone nombre load
/* $jose = new Person(); */
/* $jose->name = "Jose";
$jose->lastName = "Lopez"; */
/*$jose->sex = "Jose";
$jose->nationality = "Jose";
$jose->age = "Jose";*/
use controller as con;//importar namespace
$luren= new con\Client();
$luren->setName('Luren');


$gael = new Employe();
$sudoku = new con\Provider();
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