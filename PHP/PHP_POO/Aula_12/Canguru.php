<?php
    require_once 'Mamifero.php';

    class Canguru extends Mamifero{
        //atributos

        // métodos públicos
        public function usarBolsa(){
            echo "<p>bolsa sendo usada</p>";
        }

        public function emitirSom(){
            echo "<p>Som de Canguru</p>";
        }

        public function locomover(){
            echo "<p>Saltando</p>";
        }
    }