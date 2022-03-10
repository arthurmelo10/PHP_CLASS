<?php
    abstract class Animal {
        protected float $peso;
        protected int $idade;
        protected int $membros;

        // métodos abstratos
        abstract public function locomover();

        abstract public function alimentar();

        abstract public function emitirSom();

        //métodos especiais

        public function getPeso(){
            return $this->peso;
        }

        public function setPeso(float $peso){
            $this->peso = $peso;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade(int $idade){
            $this->idade = $idade;
        }

        public function getMembros(){
            return $this->membros;
        }

        public function setMembros(int $membros){
            $this->membros = $membros;
        }
    }
?>