<?php
    class Pessoa {
        
        const nome = "Julla";

        public function exibirNome() 
        {
           echo self::nome;
        }
    }

    class Arthur extends Pessoa 
    {
        const nome = "Bezerra";

        public function exibirNome()
        {
            echo parent::nome;
        } 
    }

    $pessoa = new Arthur;
    $pessoa->exibirNome();

    $menino = new Pessoa;
    $menino->exibirNome();