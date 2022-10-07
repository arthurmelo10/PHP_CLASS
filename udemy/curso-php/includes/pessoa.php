<?php

class Pessoa 
{
    public string $nome;
    public int $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;      
    }

    public function apresentar()
    {
        return "$this->nome, $this->idade anos";
    }
}