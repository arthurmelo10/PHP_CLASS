<?php
    require_once 'Animal.php';

    class Mamifero extends Animal {
        //atributos
        protected string $corPelo;

        // métodos públicos

        public function alimentar(){
            $this->setPeso($this->getPeso() + 5);
            echo "<p>Mamando !!</p>";
        }

        public function locomover(){
            echo "<p>Correndo!!</p>";
        }

        public function emitirSom(){
            echo "<p>Som de Mamífero</p>";
        }

        //métodos especiais

        public function getCorPelo(){
            return $this->corPelo;
        }

        public function setCorPelo(string $corPelo){
            $this->corPelo = $corPelo;
        }
    }