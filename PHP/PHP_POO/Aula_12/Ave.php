<?php

    require_once 'Animal.php';

    class Ave extends Animal {
        //atributos
        protected string $corPena;

        //métodos públicos

        public function alimentar(){
            $this->setPeso($this->getPeso() + 5);
            echo "<p>Aves Comendo</p>";
        }

        public function locomover(){
            echo "<p>Voando</p>";
        }

        public function emitirSom(){
            echo "<p>Som de Ave</p>";
        }

        public function fazerNinho(){ // herança por diferença
            echo "<p>Ninho feito!!</p>";
        }

        //métodos especiais
        public function getCorPena(){
            return $this->corPena;
        }

        public function setCorPena(){
            $this->corPena = $corPena;
        }
    }