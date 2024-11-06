<?php 

    class Salary{
        private $currentSalary;

        public function __construct($currentSalary){
            $this->currentSalary = $currentSalary;
        }

        public function calculateNewSalary(){

            if($this->currentSalary < 500){
                $newSalary = $this->currentSalary * 1.15;
               

            }elseif($this->currentSalary >= 500 && $this->currentSalary <= 1000){
                $newSalary = $this->currentSalary * 1.10;
            }else{
                $newSalary = $this->currentSalary * 1.05;
            }

            return $newSalary;
        }

    }
?>