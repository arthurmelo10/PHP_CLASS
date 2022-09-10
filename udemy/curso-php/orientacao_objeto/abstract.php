<div class="titulo">Abstract Class - Prática</div>

<?php
print('<b>Exemplo 1</b><br>');

abstract class Abstrata 
{
    // Classe não pode ser instanciada
    // Você quer ter reuso de código, tem que ter herança
    // criar funcionalidades que serão herdadas
    // O único proósito é ela ser herdada
    // vocçe quer criar subclasses, reusar código por herança
    // sem subclasses, não vai ter quem herdar as funcionalidades, tirando o propósito da classe abstrata

    abstract public function metodo1();
    protected abstract function metodo2(string $parametro);
    // métodos abstratos não possuem corpo, por isso, são seguidos de ';'
    /**
     * Não faz sentido criar um método abstrato privado, 
     * pois métodos privados não são transmitidos para as classes filhas
     */

} 

abstract class FilhaAbstrata extends Abstrata 
{
    /**
     * em termos de hierarquia, no nível mais alto, temos uma maior generalização de conceitos
     * Quando vai descendo na hierarquia, vai tornando o conceito mais específico
     */
    public function metodo1()
    {
        echo "Executando método 1<br>";
    }

    abstract public function metodo3();

}

class Concreta extends FilhaAbstrata
{
    public function metodo1()
    {
        echo "Executando metodo 1 extendido<br>";
        parent::metodo1();
    }
    
    protected function metodo2(string $parametro)
    {
        echo "Executando metodo 2, parâmetro $parametro passado<br>";
    }
    
    public function metodo3()
    {
        echo "Executando metodo 3 <br>";
        $this->metodo2("Estou aqui");
    }
}

echo '
<pre>
abstract class Abstrata 
{
    // Classe não pode ser instanciada
    // Você quer ter reuso de código, tem que ter herança
    // criar funcionalidades que serão herdadas
    // O único proósito é ela ser herdada
    // vocçe quer criar subclasses, reusar código por herança
    // sem subclasses, não vai ter quem herdar as funcionalidades, tirando o propósito da classe abstrata

    abstract public function metodo1();
    protected abstract function metodo2(string $parametro);
    // métodos abstratos não possuem corpo, por isso, são seguidos de ;
    /**
     * Não faz sentido criar um método abstrato privado, 
     * pois métodos privados não são transmitidos para as classes filhas
     */

} 

abstract class FilhaAbstrata extends Abstrata 
{
    /**
     * em termos de hierarquia, no nível mais alto, temos uma maior generalização de conceitos
     * Quando vai descendo na hierarquia, vai tornando o conceito mais específico
     */
    public function metodo1()
    {
        return "Executando método 1";
    }

    abstract public function metodo3();

}

class Concreta extends FilhaAbstrata
{
    public function metodo1()
    {
        //echo "Executando metodo 1 extendido";
        parent::metodo1();
    }
    
    protected function metodo2(string $parametro)
    {
        echo "Parâmetro $parametro passado";
    }
    
    public function metodo3()
    {
        return "Executando metodo 3";
        $this->metodo2("Estou aqui");
    }
}
</pre>';

$concreta = new Concreta();
echo '$concreta = new Concreta()';
echo '<br>';
echo '$concreta->metodo1(): <br>'; 
$concreta->metodo1();
//$concreta->metodo2("Estou aqui");
echo '<br>';
echo '$concreta->metodo3(): <br>'; 
$concreta->metodo3();

var_dump($concreta);
echo '<br>';
var_dump($concreta instanceof Abstrata);
echo '<br>';
var_dump($concreta instanceof FilhaAbstrata);
echo '<br>';
var_dump($concreta instanceof Concreta);