<?php
    Class MyClass{
        public $x, $y, $z;

        public function mysum(){

            $this->z = $this->x + $this->y;
            return $this-> z;
        }
    }

    $sabbir = new MyClass();
    $sabbir->x = 100;
    $sabbir->y = 150;

    echo $sabbir->mysum();
?>