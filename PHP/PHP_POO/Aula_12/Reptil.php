<?php
    require_once 'Animal.php';

    class Reptil extends Animal {
        //atributos
        protected string $corEscama;

        //metodos publicos
        public function alimentar(){
            $this->setPeso($this->getPeso() + 5);
            echo "<p>Reptil comendo</p>";
        }

        public function locomover(){
            echo "<p>Rastejando !!</p>";
        }

        public function emitirSom(){
            echo "<p>Som de Reptil</p>";
        }

        //métodos especiais
        public function getCorEscama(){
            return $this->corEscama;
        }

        public function setCorEscama(string $corEscamacorEscama){
            $this->corEscama = $corEscama;
        }
    }