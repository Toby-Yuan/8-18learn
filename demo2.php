<?php
    class Animal{
        public $dataBag;

        public function __construct($weightValue = 1) {
            $this->weight = $weightValue;
        }

        public function __destruct(){
            echo "not used";
        }

        public function __set($k, $v){
            $this->dataBag[$k] = $v;
        }

        public function __get($k){
            return $this->dataBag[$k];
        }

        public $weight = 1;
        public function noice(){
            echo "YEEEEEEEE $this->weight<br>";
        }

    }

    $dog = new Animal();
    echo $dog->weight . "<br>";
    $dog->weight = 15;
    echo $dog->weight . "<br>";
    $dog->noice();

    $dog->location = "TC";
    echo $dog->location . "<br>";
?>