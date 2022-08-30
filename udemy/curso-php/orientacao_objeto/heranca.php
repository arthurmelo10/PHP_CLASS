<div class="titulo">Herança</div>

<?php
class Pessoa 
{
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada !<br>';
    }

    function __destruct()
    {
        echo 'Tchau!!';
    }

    public function apresentar()
    {
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
    // os modificadores de acesso dão o tom de quas parâmetros e métodos estarão disponíveis para as instâncias da classe Pessoa
}

class Usuario extends Pessoa
{
    /**
     * Usuario é a classe filha, sub classe
     * Pessoa é a classe pai, super classe
     * Usuário herda os atributos e comportamentos que estão definidos como públicos em pessoas
     * Nem tudo que um usuário tem, a pessoa tem
     * A partir do momento que vai descendo na hierarquia de herança, vamos encontrando uma maior especificidade
     */
    
}
