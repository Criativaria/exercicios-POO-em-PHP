<?php

class Product {
    private $price;
    private $originCode;

    public function __construct($price, $originCode) {
        $this->price = $price;
        $this->originCode = $originCode;
    }

    public function getOrigin() {
        switch($this->originCode) {
            case 1:
                return "Sul";
            case 2:
                return "Sudeste";
            case 3:
                return "Centro-Oeste";
            case 4:
                return "Norte";
            case 5:
                return "Nordeste";
            default:
                return "código inválido";
        }
    }
}

?>
