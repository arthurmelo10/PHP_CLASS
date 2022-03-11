<?php
    require_once 'Lobo.php';

    class Cachorro extends Lobo {
        public function emitirSom(){
            echo "<p>Latindo</p>";
        }

        public function reagirFrase(string $frase){
            if(($frase == "Ola") || ($frase == "toma comida")){
                echo "<p>Abanar e Latir</p>" ;  
            }
            if(($frase <> "Ola") && ($frase <>"toma comida")){
                echo "<p>Rosnar e Latir</p>";
            }
        }
        public function reagirHora(int $hora){
            if($hora<12){
                echo "<p>Abanar</p>";
            }
            if($hora>=12 && $hora<18){
                echo "<p>Abanar e Latir</p>";
            }
            if($hora>=18 && $hora<=24){
                echo "<p>Ignorar</p>";
            }
            if($hora>24){
                echo "<p>ERRO</p>";
            }
        }
        public function reagirDono(bool $dono){
            if($dono == true){
                echo "<p>Abanar para o dono</p>";
            }
            if($dono == false){
                echo "<p>Rosnar e Latir</p>";
            }
        }
        public function reagirIP(int $idade, float $peso){
            if($idade<=5 && $peso<=15.00){
                echo "<p>Abanar</p>";
            }
            if($idade<=5 && $peso>15.00){
                echo "<p>Latir</p>";
            }
            if($idade>5 && $peso <= 15.00){
                echo "<p>Rosnar</p>";
            }
            if($idade>5 && $peso > 15.00){
                echo "<p>Ignorar</p>";
            }
        }

    }