<?php
  abstract class Person {
        private $name;
        private  $lastName;
        private $sex;
        private $nationality;
        private $age;
        static $color = 'Rojo';

        
    abstract function run();
    
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
 

       
        public function getName()
        {
                return $this->name;
        }

      
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

      
        public function getLastName()
        {
                return $this->lastName;
        }

      
        public function setLastName($lastName)
        {
                $this->lastName = $lastName;

                return $this;
        }

      
        public function getSex()
        {
                return $this->sex;
        }

       
        public function setSex($sex)
        {
                $this->sex = $sex;

                return $this;
        }

      
        public function getNationality()
        {
                return $this->nationality;
        }

     
        public function setNationality($nationality)
        {
                $this->nationality = $nationality;

                return $this;
        }

       
        public function getAge()
        {
                return $this->age;
        }

      
        public function setAge($age)
        {
                $this->age = $age;

                return $this;
        }
    }


?>