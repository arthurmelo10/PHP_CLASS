<div class="titulo">Primeira Classe</div>

<?php
print('<b>Exemplo 1</b><br>');

echo '
PHP não depende de classe para funcionar. Assim, podemos usar classe para organizar o seu código';

class Cliente 
{
    public $nome = 'Anônimo'; 
    public $idade = 18; 


    public function apresentar()
    {
        echo "Meu nome é $this->nome, tenho $this->idade anos";
    }
}

echo '
<pre>
class Cliente 
{
    //bloco de código
    // Sempre a primeira letre é maíuscula
    // Mesmo se o nome da classe tiver mais de um nome

    //atributos
    public $nome = "Anônimo"; // a declaração do atributo é iguál a uma variável no php
    public $idade = 18; // idade padrão

    // palavra public remete ao nível de visibilidade

    //método
    public function apresentar()
    {
        echo "Meu nome é $this->nome, tenho $this->idade anos";
    }
}
</pre>';
$cliente = new Cliente();
echo '<br>';
echo '$cliente = new Cliente() => Instanciação de uma classe (criação de um objeto)';
echo '<br>';
echo '$cliente->apresentar() => ';
$cliente->apresentar();

echo '<hr>';

echo '<b>Alterando o valor dos Atributos: </b><br>';

$cliente_2 = new Cliente();
echo '$cliente_2 = new Cliente() [Nova instaciação, utilizando a mesma classe]';
echo '<br>';
$cliente_2->nome = 'Arthur';
echo '$cliente_2->nome = "Arthur"';
echo '<br>';
$cliente_2->idade = 27;
echo '$cliente_2->idade = 27';
echo '<br>';
$cliente_2->apresentar();


echo '<hr>';

print('<b>Outro Exemplo !!</b><br>');
class ClienteEspecial
{
    public $nome = 'Anônimo'; 
    public $idade = 18; 


    public function apresentar($nome, $idade)
    {
        return "Meu nome é $nome, tenho $idade anos";
    }
}

echo '
<pre>
class Cliente 
{
    public $nome = Anônimo; 
    public $idade = 18; 


    public function apresentar($nome, $idade)
    {
        return "Meu nome é $nome, tenho $idade anos";
    }
}
</pre>';

$cliente_3 = new ClienteEspecial();
echo '$cliente_3 = new ClienteEspecial()';
echo '<br>';
echo '$cliente_3->apresentar(Ana, 27) = '  ;
echo $cliente_3->apresentar('Ana', 27);
echo '<hr>';

echo '<p>Os atributos pertecem a cada nova instância (objeto).
<br>O "$this" direciona a informação para o valor do atributo de cada objeto</p>';
