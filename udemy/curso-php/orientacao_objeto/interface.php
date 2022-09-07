<div class="titulo">Interface</div>

<?php
print('<b>Definição</b><br>');
print('Nome que pode ser utilizado em diferentes contextos');

echo 'Em termos de orientação a objeto, interface é aquilo que está visível a partir de determninado objeto';

ECHO '
<pre>
Class A 
{
    public function mostrarA() ...

    private function naoMostrar() ...
}

$a = new A
$a->mostrarA() => a função mostrarA faz parte da interface do objeto., pois é possível visualizar a função
$a->naoMostrar() => a função naoMostrar não faz parte da interface do objeto, pois não é possível acessá-la ou à sua informação
</pre>';

echo '
<ul>
Encapsulamento da TV: 
    <li>o controle remoto faz parte da interface da televisão</li>
    <li>o capacitor não faz parte da interface, pois não está acessível ao usuário</li>
</ul>

<br>Aquilo que está visível dentroda classe, os membros visíveis, os atributos e os comportamentos<br>
';


echo '<hr>';

interface Animal 
{
    /**
     * Dentro da interface, estão definidos métodos e comportamentos que serão implementados nas classes
     */

     public function respirar(); // classe gennérica, sem implementação do "corpo"
    /**
     * todas as classes que implementarem animal, vão obrigatoriamente implementar o método respitar
     */ 
}

interface Mamifero
{
    public function mamar();
}

interface Canino extends Animal, Mamifero
{
    public function latir(): string;

    public function correr();
}

interface Felino
{
    public function correr();
}

class Cachorro implements Canino
{
    public function respirar()
    {
        echo "Inspira e expira !!<br>";
    }

    public function latir(): string
    {
        return 'au au';
    }

    public function mamar()
    {
        return "Vou tomar leite";
    }

    public function correr()
    {
        return "Correndo";
    }
}

echo '
<pre>
interface Animal // classe mais genérica
{
    /**
     * Dentro da interface, estão definidos métodos e comportamentos que serão implementados nas classes
     */

     public function respirar(); // classe gennérica, sem implementação do "corpo"
    /**
     * todas as classes que implementarem animal, vão obrigatoriamente implementar o método respitar
     */ 
}

interface Canino extends Animal
{
    public function latir(): string;

    public function correr();
}

interface Mamifero
{
    public function mamar();
}

interface Felino
{
    public function correr();
}

class Cachorro implements Animal, Canino (uma classe pode implementar várias interfaces)
{
    public function respirar()
    {
        echo "Inspira e expira !!";
    }

    public function latir(): string
    {
        return "au au";
    }

    public function mamar()
    {
        return "Vou tomar leite";
    }

    public function correr()
    {
        return "Correndo";
    }
}
</pre>';

$animal1 = new Cachorro;
echo '$animal1 = new Cachorro';
echo "<br>";
echo '$animal1->respirar() = ';
$animal1->respirar();
echo "<br>";
echo '$animal1->latir() = ';
echo $animal1->latir();
echo "<br>";
echo '$animal1->mamar() = ';
echo $animal1->mamar();
echo "<br>";
echo '$animal1->correr() = ';
echo $animal1->correr();

echo '
<ul>
    <li>toda interface possui somente a declaração do método, com seu nome, seus parâmetros e seus retornos. Implementação fica para a classe</li>
    <li>Todos os métodos são públicos</li>
    <li>interface pode extender de outras interfaces</li>
    <li>Implantar em classes instanciáveis => classes concretas => necessidade de todos os métodos estarem implementados</li>
</ul>';

echo '<br>';
var_dump($animal1);

echo '<br>';
var_dump($animal1 instanceof Cachorro);

echo '<br>';
var_dump($animal1 instanceof Canino);

echo '<br>';
var_dump($animal1 instanceof Animal);

echo '<br>';
var_dump($animal1 instanceof Mamifero);

echo '<br>';
var_dump($animal1 instanceof Felino);


//Herança de "interface" = necessidade de algo ser feito por padrão => modelo para forçar uma padronização

//cuidado com reuso, não é porque tenho o método correr, que animal implementa a interface felino. Os nomes são apenas diferentes