<div class="titulo">Construtor & Destrutor</div>

<b>Definições</b>

<br>

<ul>
    <li>Dois métodos especiais que são chamados em momentos importantes, quando ele é criado </li>
    <li><b>Construtor</b>: chamado no momento em que o objeto é criado</li>
    <li><b>Destrutor</b>: chamado antes de o objeto se destruido, ele é chamado para realizar alguma ação</li>
</ul>

<?php

class Pessoa
{
    //atributos/propriedades

    public $nome;
    public $idade;

    public function __construct($novoNome, $idade = 18)
    {
        echo 'Construtor invocado<br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }
    //desta forma, quando o objeto for instanciado, os dois valores serão chamados e o objeto será inicializado sem ter definido os valores padrões para os atributos
    //Podemos colocar um valor padrão no parâmetro do construtor. Desta forma, podemos chamar o construtor passando um ou dois parâmetros.

    public function __destruct()
    {
        //método é chamado sempre que o objeto for destruído
        echo 'E Morreu !!';
    }

    public function apresentar()
    {
        echo "{$this->nome},{$this->idade} anos <br>";
    }
}

echo '
<pre>
class Pessoa
{
    //atributos/propriedades

    public $nome;
    public $idade;

    public function __construct($novoNome, $idade = 18)
    {
        echo "Construtor invocado";
        $this->nome = $novoNome;
        $this->idade = $idade;
    }
    //desta forma, quando o objeto for instanciado,
    <br> os dois valores serão chamados e o objeto será inicializado 
    <br> sem ter definido os valores padrões para os atributos
    //Podemos colocar um valor padrão no parâmetro do construtor. 
    <br>Desta forma, podemos chamar o construtor passando um ou dois parâmetros.

    public function __destruct()
    {
        //método é chamado sempre que o objeto for destruído
        echo "E Morreu !!";
    }

    public function apresentar()
    {
        echo "{$this->nome},{$this->idade} anos <br>";
    }
}
<pre>';

echo '$pessoa = new Pessoa("Arthur", 27)';
echo '<br>';
$pessoa = new Pessoa('Arthur', 27);
echo '$pessoa->apresentar()';
echo '<br>';
$pessoa->apresentar();

echo '<hr>'; 

echo '$pessoa_2 = new Pessoa("Jullia")'; 
echo '<br>';
$pessoa_2 = new Pessoa('Jullia');
echo '$pessoa_2->apresentar()';
echo '<br>';
$pessoa_2->apresentar();

//$pessoa_3 = new Pessoa;
echo 'Fim !';
echo '<p><h2>É obrigatório passar os parâmetros do construtor no momento de criação do objeto !!</h2></p>';

echo '<hr>';

print('Chamando o destrutor<br>');

echo 'unset($pessoa) = ';
unset($pessoa); 

echo '<br>função unset libera a variável da sua referência na memória</br>';
echo '<br>';
echo '$pessoa_3 = new Pessoa("Osvaldo")';
echo '<br>';
$pessoa_3 = new Pessoa('Osvaldo');
echo '$pessoa_3->apresentar()';
echo '<br>';
$pessoa_3->apresentar();
echo '$pessoa_3 = null -> igualar o objeto a null também chama o método mágico destrutor';
echo '<br>';
$pessoa_3 = null;