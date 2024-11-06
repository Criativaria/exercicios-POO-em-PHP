<?php

class BookCategory{
    private $code;

    public function __construct($code){
        $this->code = $code;
    }

    public function getCategory(){
        switch($this->code){
            case 'A':
                return "Ficção";
            case 'B': 
                return "Não-Ficção";
            default:
                return "Inválido";
        }
    }

}

?>