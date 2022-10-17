<?php

namespace Desafio\Usuario;

echo __NAMESPACE__ . '<br>';

require_once ('pessoa.php');

use Desafio\Pessoa\Pessoa;

class Usuario extends Pessoa
{
    public string $login;

    public function __construct($nome, $idade, $login)
    {
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Novo user criado !!<br>';

    }

    public function apresentar()
    {
        $login =  "@{$this->login}: ";
        return $login . parent::apresentar();
    }
}
