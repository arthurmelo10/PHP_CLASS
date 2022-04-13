<?php
    class Pessoa 
    {
        public $idade; //propriedade

        public function __clone()
        {
            echo "Clonagem de objetos";
        }
    }

    $pessoa = new Pessoa();
    $pessoa->idade = 27;

    $pessoa2 = clone $pessoa;
    $pessoa2->idade = 38;

    echo $pessoa->idade;
    echo $pessoa2->idade;