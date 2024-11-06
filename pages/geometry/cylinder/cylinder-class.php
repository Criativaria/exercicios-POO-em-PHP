<?php

    class Cylinder{

        private $radius;
        private $height;

        public function __construct($radius, $height){
            $this->radius = $radius;
            $this->height = $height;
        }

        public function calculateVolume(){
            return pi() * pow($this->radius, 2) * $this->height; 
        }
    }

?>