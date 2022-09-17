<div class="titulo">Métodos Mágicos</div>

<?php
print('<b>Exemplo 1</b><br>');

class Pessoa 
{
    /**
     * Usaremos osmétodos construtor e destrutor
     * usaremoso toString = converter um objeto para uma string
     * Podemos nchamar o toString a partir de outros métodos
     * É possível acessar atributos que não existemdentro de determinada classe = método get
     * Método set é utilizado para alterar o valor dos atributos, inclusive daqueles que não foram setados
     */

     public $nome;
     public $idade;

     public function __construct($nome, $idade)
     {
        echo "Construtor invocado!<br>";
        $this->nome = $nome;
        $this->idade = $idade;
     }

    public function __destruct()
    {
        /**
         * Atribuir valor nulo para o objeto
         * Chamado o método unset para liberar a variável
         */

         echo "E morreu !!<br>";
    }

    public function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos";
    }

    public function apresentar()
    {
        echo $this . "<br>";
    }

    public function __get($atrib)
    {
        echo "Lendo atributo não declarado: {$atrib}<br>";
        return $atrib;
    }

    public function __set($atrib, $value)
    {
        echo "Alterando o atributo não declarado: {$atrib}/{$value}<br>";
    }

    public function __call($metodo, $params)
    {
        /**
         * Chamando um método que não existe dentro da classe
         */
        echo "Tentando executar método '${metodo}', ";
        echo "<br> com os parâmetros: ";
        print_r($params);
    }
    
}

echo '
<pre>
class Pessoa 
{
    /**
     * Usaremos os métodos construtor e destrutor
     * Usaremoso toString = converter um objeto para uma string
     * Podemos chamar o toString a partir de outros métodos
     * É possível acessar atributos que não existem <br>dentro de determinada classe = método get
     * Método set é utilizado para alterar o valor dos atributos<br>inclusive daqueles que não foram setados, 
     */

     public $nome;
     public $idade;

     public function __construct($nome, $idade)
     {
        echo "Construtor invocado!";
        $this->nome = $nome;
        $this->idade = $idade;
     }

    public function __destruct()
    {
        /**
         * Atribuir valor nulo para o objeto
         * Chamado o método unset para liberar a variável
         */

         echo "E morreu !!";
    }

    public function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos";
    }

    public function apresentar()
    {
        echo $this;
    }

    public function __get($atrib)
    {
        echo "Lendo atributo não declarado: {$atrib}";
        return $atrib;
    }

    public function __set($atrib, $value)
    {
        echo "Alterando o atributo não declarado: {$atrib}/{$value}";
    }

    public function __call($metodo, $params)
    {
        /**
         * Chamando um método que não existe dentro da classe
         */
        echo "Tentando executar método "${metodo}", ";
        echo "com os parâmetros: ";
        print_r($params);
    }
    
}
</pre>';

echo '$pessoa = new Pessoa("Arthur",27)<br>';
echo '<b>Chamando o Construtor</b>';
echo '<br>';
$pessoa = new Pessoa('Arthur',27);

echo '<hr>';

echo '<b>Chamando o método __toString: </b><br>';
echo '$pessoa->apresentar(): ';
$pessoa->apresentar(); // chamando o toString
//echo '<br>';
echo '$pessoa: ';
echo $pessoa;  //chamando o toString
echo '<br>';
var_dump($pessoa);

echo '<br>';
echo '<br>';

echo 'Alterando o valor da propriedade nome: <br>';
echo '$pessoa->nome = Anna';
$pessoa->nome = 'Anna'; // alterando o valor da propriedade nome
echo '<br>';
echo '<b>Chamando o toString, sem passar pelo método call</b><br>';
echo '$pessoa->apresentar(): ';
$pessoa->apresentar(); // chamando o toString, sem passar pelo método call

echo '<hr>';

echo '<b>Chamando o método get: </b><br>';
echo  '$pessoa->nomeCompleto <br>';
$pessoa->nomeCompleto; // chamando o método get
echo '<br>';
var_dump($pessoa->nomeCompleto);

echo '<hr>';

echo '<b>Chamando o método set</b><br>';
echo  '$pessoa->Palmeiras = VAAAAIII <br>';
$pessoa->Palmeiras = 'VAAAAIII'; // chamando o método set
echo '<br>';
//var_dump($pessoa->Palmeiras);

echo '<b>Chamando o método get, com o novo atributo Palmeiras</b><br>';
echo '$pessoa->Palmeiras <br>';
$pessoa->Palmeiras; // chamando o get

echo '<hr>';

echo '<b>Acessa o atributo diretamente sem o get</b><br>';
echo '$pessoa->nome: ';
echo $pessoa->nome; // acessa o atributo diretamente sem o get

echo '<hr>';

echo '<b>Chamando o metodo call</b> <br>';
echo '$pessoa->exec(1, "teste", true, [1,2,3])<br>';
$pessoa->exec(1, 'teste', true, [1,2,3]); // chamando o metodo call, exec não existe 

echo '<hr>';

echo '<b>Chamando o destrutor</b><br>';
echo '$pessoa = null <br>' ;
$pessoa = null;

echo '<p>Métodos mágicos são mais lentos do que métodos nonrmais, por isso, temos que tomar cuidado para usar de forma incorreta</p>';