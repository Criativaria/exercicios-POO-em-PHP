<?php

    class Sphere{
        private $radius;

        public function __construct($radius){
            $this->radius = $radius;
        }

        public function calculateVolume(){
            return (4/3) * pi() * pow($this->radius, 3);
        }
    }

?>