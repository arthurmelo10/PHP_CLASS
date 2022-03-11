<?php
    require_once 'Mamifero.php';

    class Lobo extends Mamifero {
        // atributos

        // metodos públicos
        public function emitirSom(){
            echo "<p>Uivando</p>";
        }
    }