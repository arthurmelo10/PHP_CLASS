<?php
    
    namespace App\Model;
    
    class Produto
    {   
        private $id;
        private string $nome;
        private string $descrição;

        
        public function getId()
        {
            return $this->id;
        }
        
        public function setId($id)
        {
            $this->id = $id;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome(string $nome)
        {
            $this->nome = $nome;
        }

        public function getDescrição()
        {
            return $this->descrição;
        }

        public function setDescrição($descrição)
        {
            $this->descrição = $descrição;
        }
    }