<?php

class Pessoa 
{
    // características são os atributos
    
    /**
     * @var string
     */
    public $nome;
    
    /**
     * @var int
     */
    public $idade;
    
    // ações - métodos
    public function falar() 
    {
        echo $this->nome. " de ".$this->idade." acabou de falar";
    }
}

$rodrigo = new Pessoa();

$rodrigo->nome = "Rodrigo Santos de Oliveira";
$rodrigo-> idade = 25;

$rodrigo->falar();
var_dump($rodrigo);