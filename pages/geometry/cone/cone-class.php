<?php

    class Cone{

        private $radius;
        private $height;

        public function __construct($radius, $height){
            $this->radius = $radius;
            $this->height = $height;
        }

        public function calculateVolume(){
            return (1/3) * pi() * pow($this->radius, 2) * $this->height; 
        }
    }

?>