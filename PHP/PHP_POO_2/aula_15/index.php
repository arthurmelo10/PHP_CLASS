<?php
    class Pessoa 
    {
        private $dados = array();

        public function __get($nome)
        {
            return $this->dados[$nome];
        }

       public function __set($nome, $valor)
       {
            $this->dados[$nome] = $valor;
       }

       public function __toString()
       {
           return "tentei imprimir o objeto";
       }

       public function __invoke()
       {
           return "Obejto como função";
       }
    }

    $pessoa = new Pessoa();
    $pessoa->nome = "Arthur";
    $pessoa->idade = 50;
    $pessoa->sexo = "M";

    /*echo $pessoa->nome."<br>";
    echo $pessoa->idade."<br>";
    echo $pessoa->sexo."<br>";*/

    echo $pessoa;

    echo $pessoa();