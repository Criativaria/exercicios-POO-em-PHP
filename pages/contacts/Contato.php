<?php 

class Contato{
    private $nome; //armazena o nome do contato
    private $email;  //armazena o email do contato
    private $telefone; //armazena o telefone do contato


    //metodo construtor que inicializa as propriedades
    public function __construct($nome, $email, $telefone){
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function getNome(){ //retorna o nome do contato
        return $this->nome; 
    }
    public function getEmail(){ //retorna o email do contato
        return $this->email; 
    }
    public function getTelefone(){ //retorna o telefone do contato
        return $this->telefone; 
    }  
}

?>