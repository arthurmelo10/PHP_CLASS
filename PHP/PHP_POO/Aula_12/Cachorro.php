<?php
    require_once 'Mamifero.php';

    class Cachorro extends Mamifero {
        //atributos

        //métodos públicos
        public function enterrarOsso(){
            echo "<p>Osso enterrado</p>";
        }

        public function abanarRabo(){
            echo "<p>Abanando o Rabo !!</p>";
        } 

        public function emitirSom(){
            echo "AU AU AU AU AU";
        }
    }