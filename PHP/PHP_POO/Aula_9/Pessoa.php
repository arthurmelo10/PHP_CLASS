<?php

    class Pessoa {
        // atributos
        private string $pessoa;
        private int $idade;
        private string $sexo;

        // métodos especiais

        public function __construct(string $pessoa, int $idade, string $sexo){
            $this->pessoa = $pessoa;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        public function getPessoa(){
            return $this->pessoa;
        }

        public function setPessoa(string $pessoa){
            $this->pessoa = $pessoa;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade(int $idade){
            $this->idade = $idade;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function setSexo(string $sexo){
            $this->sexo = $sexo;
        }

        // métodos públicos

        public function fazerAniver(){
            $this->setIdade($this->getIdade()+1);
        }
    }
?>