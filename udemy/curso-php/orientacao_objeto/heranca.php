<div class="titulo">Herança</div>

<?php
print('<b>Exemplo 1 de Herança</b><br>');
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
        echo 'Pessoa diz: Tchau!!';
    }

    public function apresentar()
    {
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
    // os modificadores de acesso dão o tom de quas parâmetros e métodos estarão disponíveis para as instâncias da classe Pessoa
}

echo '
<pre>
class Pessoa 
{
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Pessoa Criada !";
    }

    function __destruct()
    {
        echo "Pessoa diz: Tchau!!";
    }

    public function apresentar()
    {
        echo "{$this->nome}, {$this->idade} anos";
    }
    // os modificadores de acesso dão o tom de quas parâmetros e métodos estarão disponíveis para as instâncias da classe Pessoa
}
</pre>';

class Usuario extends Pessoa
{
    /**
     * Usuario é a classe filha, sub classe
     * Pessoa é a classe pai, super classe
     * Usuário herda os atributos e comportamentos que estão definidos como públicos em pessoas
     * Nem tudo que um usuário tem, a pessoa tem
     * A partir do momento que vai descendo na hierarquia de herança, vamos encontrando uma maior especificidade
     * Provavelmente, a classe mais específica, vai ter mais comportamentos e atributos do que a classe pai
     */

     public $login;

     function __construct($nome, $idade, $login)
     {
        parent::__construct($nome, $idade);
        $this->login = $login;

        echo "Usuário Criado !! <br>";
     }

     function __destruct()
     {
        echo 'Usuário diz tchau !!<br>';
        parent::__destruct();
     }

     public function apresentar()
     {
        echo "@{$this->login}: "; // E acrescentando a propriedade login
        parent::apresentar(); // chamar a função apresentar presente na classe Pessoa, mantendo seu comportamento original
     }
    
}

echo '
<pre>
<b>class Usuario extends Pessoa</b>
{
    /**
     * Usuario é a classe filha, sub classe
     * Pessoa é a classe pai, super classe
     * Usuário herda os atributos e comportamentos que estão definidos como públicos em pessoas
     * Nem tudo que um usuário tem, a pessoa tem
     * A partir do momento que vai descendo na hierarquia de herança, vamos encontrando uma maior especificidade
     * Provavelmente, a classe mais específica, vai ter mais comportamentos e atributos do que a classe pai
     */

    <b>public $login;</b>

    //  function __construct($nome, $idade, $login)
    //  {
    //     $this->nome = $nome;
    //     $this->idade = $idade;
    //     $this->login = $login;
    //     echo "Usuário Criado !!";
    //  }

    <b>function __construct($nome, $idade, $login)
     {
        parent::__construct($nome, $idade); //chamando o construtor da classe pai
        $this->login = $login;

        echo "Usuário Criado !!";
     }</b>

    //  function __destruct()
    //  {
    //     echo "Usuário diz tchau !!";
    //  }

    <b>function __destruct()
     {
        echo "Usuário diz tchau !!";
        parent::__destruct(); // chamando o destrutor da classe pai
     }</b>

    //  public function apresentar()
    //  {
    //     echo "@{$this->login}: {$this->nome}, {$this->idade} anos ";
    //  }

    <b>public function apresentar()
     {
        echo "@{$this->login}: "; // E acrescentando a propriedade login
        parent::apresentar(); // chamar a função apresentar presente na classe Pessoa, mantendo seu comportamento original
     }</b>
    
}
</pre>';

echo '<hr>';

print('<h5>Exemplos práticos !!</h5>');

echo '$usuario = new Usuario("Gustavo Mendonça", 21, "gust_mend")';
$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
echo '<br>';
echo '$usuario->apresentar() = ';
$usuario->apresentar(); 

echo '<p>O método apresentar é sobrescrito na classe Usuario, visto que herda da classe Pessoa, mas modifica o método</p>';

echo '<p>Tomar cuidado na sobreposição, visto que se for feita de forma inncorreta, pode causar impactos na aplicação !!!</p>';

echo 'Chamando o destrutor:  unset($usuario) = ';
unset($usuario);