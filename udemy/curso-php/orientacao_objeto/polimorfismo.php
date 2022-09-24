<div class="titulo">Polimorfismo</div>

<?php
echo 'mais presente em linguagens fortemente tipadas';
echo '<br>';
echo 'como passar tipos mais genéricos, ajuda a passar tipos mais específicos';

print('<p><b>Exemplo 1</b></p><br>');

abstract class Comida
{
    public $peso;
}

class Arroz extends Comida
{

}

class ArrozAGrega extends Arroz
{

}

class Feijao extends Comida
{

}

class Sorvete extends Comida
{

}

class Pessoa
{
    public $peso;

    public function __construct($peso)
    {
        $this->peso = $peso;
    }

    public function comer (Comida $comida)
    {
        /**
         * Desta forma, o parâmetro $comida só pode ser uma instância da classe Arroz ou de classes que extendam de arroz
         */
        $this->peso += $comida->peso;
    }
}

echo '
<pre>
abstract class Comida
{
    public $peso;
}

class Arroz extends Comida { }

class ArrozAGrega extends Arroz { }

class Feijao extends Comida { }

class Sorvete extends Comida { }

class Pessoa
{
    public $peso;

    public function __construct($peso)
    {
        $this->peso = $peso;
    }

    public function comer (Comida $comida)
    {
        /**
         * Desta forma, o parâmetro $comida só pode ser uma instância 
         * da classe Arroz ou de classes que extendam de arroz
         */
        $this->peso += $comida->peso;
    }
}
</pre>'; 

$c1 = new Arroz();
$c1->peso = 0.65;
echo '$c1 = new Arroz()';
echo '<br>';
echo '$c1->peso = 0.65';
echo '<br>';
echo '<br>';

$c2 = new ArrozAGrega();
$c2->peso = 0.40;
echo '$c2 = new ArrozAGrega()';
echo '<br>';
echo '$c2->peso = 0.40';
echo '<br>';
echo '<br>';

$s1 = new Sorvete();
$s1->peso = 1.5;
echo '$s1 = new Sorvete()';
echo '<br>';
echo '$s1->peso = 1.5';
echo '<br>';
echo '<br>';

$p = new Pessoa(83.45);
echo '$p = new Pessoa(83.45)';
echo '<br>';
$p->comer($c1);
echo '$p->comer($c1)';
echo '<br>';
echo '$p->peso = ';
echo $p->peso;
echo '<br>';
echo '<br>';

$p->comer($c2);
echo '$p->comer($c2)';
echo '<br>';
echo '$p->peso = ';
echo $p->peso;
echo '<br>';
echo '<br>';

$p->comer($s1);
echo '$p->comer($s1)';
echo '<br>';
echo '$p->peso = ';
echo $p->peso;

/**
 * Polimorfismo está no fato de que a variável comida pode assumir a forma de qualquer classe que extenda de Comida 
 */
echo '<p><strong>Polimorfismo está no fato de que a variável comida pode assumir a forma de qualquer classe que extenda de Comida</strong></p>'; 
/**
 * No PHP, faz com que no cenário normal, não precisa amarrar o tipo. 
 * Mas é muito importante, para identificar corretamente as classes que podem entrar
 * Mesmo que o php tenha uma linguagem dinâmica
 */
echo '<p>
<strong>
No PHP, faz com que no cenário normal, não precisa amarrar o tipo.<br> 
Mas é muito importante, para identificar corretamente as classes que podem entrar dentro de cada método<br>
Mesmo que o php tenha uma linguagem dinâmica<br>
</strong>'
</p>';