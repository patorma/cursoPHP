<?php
class AutoLoader
{
//funcion privada para cargar nuestras clases
private function loadClass($class){
  $path =str_replace('\\','/',$class).'.php';
  if(file_exists($path)){
      require_once $path;
  }
} //se crea funcion publica para cargar todos los archivos de una clase
public function load(){

spl_autoload_register(array($this,'loadClass'));
} 
}
?>