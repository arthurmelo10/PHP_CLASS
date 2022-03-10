<?php
    require_once 'Animal.php';

    class Peixe extends Animal {
        //atributos
        protected string $corEscama;

        //métodos publicos 
        public function alimentar(){
            $this->setPeso($this->getPeso() + 5);
            echo "<p>Peixe comendo</p>";
        }

        public function locomover(){
            echo "<p>Nadando</p>";
        }

        public function emitirSom(){
            echo "<p>Peixe não faz som</p>";
        }
        
        public function soltarBolha(){ // herança para diferença
            echo "<p>Soltar Bolha</p>";
        }

        //métodos especiais
        public function getCorEscama(){
            return $this->corEscama;
        }

        public function setCorEscama(string $corEscama){
            $this->corEscama = $corEscama;
        }
    }