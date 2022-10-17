<?php
namespace Desafio\Pessoa;

echo __NAMESPACE__ . '<br>';

abstract class Pessoa 
{
    public string $nome;
    public int $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;     
        echo 'Nova pessoa criada !!<br>'; 
    }

    public function apresentar()
    {
        return "$this->nome, $this->idade anos";
    }
}