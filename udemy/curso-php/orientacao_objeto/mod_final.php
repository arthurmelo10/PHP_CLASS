<div class="titulo">Modificador Final</div>

<?php

use Abstrata as GlobalAbstrata;

print('<b>Definição</b><br>');

echo '
Palavra reservada do php, evitar que determinados métodos sejam sobrescrito, e classes tenham heranças <br>
<ul>
    Exemplo: 
    <li> Sistema bancário possui uma classe chamada conta corrente;</li> 
    <li> que possui um nível de segurança muito grande</li> 
    <li> em que não é necessário ter herança (posibilidade de mudança de comportamento)</li>
    <ul> 
        <li> comportamento que não pode ser alterado - legislação </li>
        <li>evitar bugs, sobrescritas desnecessárias </li>
    </ul>     
</ul>';

echo '<br>Diferenças com a classe abstrata, pois na classe abstratas exige que ela seja extendida, que tenha herança, mas não pode ser instanciada<br>
<br> Ao contrário da classe finnal, que evita a possibilidade de ser extendida, entretanto permite ser instanciada<br>';


echo '<hr>';

print('<b>Exemplo 1 - Final Method</b><br>');

abstract class Abstrata
{
    abstract public function metodo1();

    final public function metodo2()
    {
        echo "Não vou mudar<br>";
    }
}

class Classe1 extends Abstrata 
{
    public function metodo1() 
    {
        echo "Implementando metodo 1<br>";
    }

    // public function metodo2()
    // {
    //     echo 'Extendendo metodo 2<br>';
    // }
}

echo '
<pre>
abstract class Abstrata
{
    abstract public function metodo1();

    final public function metodo2()
    {
        echo "Não vou mudar";
    }
}

class Classe1 extends Abstrata 
{
    public function metodo1() 
    {
        echo "Implementando metodo 1";
    }

    // public function metodo2()
    // {
    //     echo "Extendendo metodo 2";
    // }

    // não é possível sobrescrever o método final,
    <br>a aplicação não apresenta as informações na tela do browser;
}
</pre>';

$classe = new Classe1;
echo '$classe = new Classe1';
echo '<br>';
echo '$classe->metodo1() = ';
$classe->metodo1();
echo '<br>';
echo '$classe->metodo2() = ';
$classe->metodo2();

echo '<hr>';

print('<b>Exemplo 2 - Final Class</b><br>');

final class Unica
{
    public $att = 2;
}

// class Duplicata extends Unica
// {
//     public $att2;
// }

echo '
<pre>
final class Unica
{
    public $att;
}

class Duplicata extends Unica => ERRO
{
    public $att2;
}

Classes finais não podem ter herança, novamente a aplicação para de exibir as informações na tela
</pre>';

echo '<br>';
echo 'Entretanto, a classe final pode ser instanciada !! <br>';
$unica = new Unica;
echo '$unica = new Unica';
echo '<br>';
echo 'echo $unica->att: ';
echo $unica->att;