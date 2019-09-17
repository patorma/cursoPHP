<?php
   class Person {
        private $name;
        private  $lastName;
        private $sex;
        private $nationality;
        private $age;
        static $color = 'Rojo';

        
    function run(){
        echo 'Metodo de la clase padre';

    }
    function see(){
       $this->sendOrder('see');
    }

   protected function talk(){
       echo 'Mi papá dijo que jugaria en la tarde conmigo';
       /*  $this->see();
        $this->lastName; */
    }

    private function sendOrder($order){
        switch ($order) {
            case 'run':
                echo 'Correr';
                break;
            case 'see':    
                echo 'Ver';
                break;
            case 'talk':
                echo 'Hablar';
                break;
            default:
                echo 'No se encontro la orden';
                break;
        }
    }
 
    }


?>