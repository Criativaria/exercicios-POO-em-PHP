<?php 

    include 'Contato.php';

    class GerenciadorDeContatos{

        private $contatos = []; //array que armazena os objetos de contato

        public function adicionarContato($nome, $email, $telefone){ //add um novo contato na array de contatos
            $novoContato = new Contato($nome, $email, $telefone); //cria o objeto contato
            $this->contatos[] = $novoContato; // add o obj de contato na array de contato (nao aguento mais escrever contato)
        }

        public function deletarContato($indice){ //remove um contato baseado no índice
            if(isset($this->contatos[$indice])){ //verifica se o índice existe na array
                unset($this->contatos[$indice]); //remove o contato da array
                $this->contatos = array_values($this->contatos); // tirar os espaços vazios da array
            }
        }

        public function obterContatos(){ //retorna todos os contatos
            return $this->contatos;
        }
    }
?>