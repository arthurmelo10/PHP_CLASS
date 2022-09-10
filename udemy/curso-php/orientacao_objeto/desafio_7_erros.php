<div class="titulo">Desafio 7 erros</div>

<?php
print('Código escrito com erros !! <br>');
interface Template 
{
    public function metodo1();

    public function metodo2 ($parametro);
}

abstract class ClasseAbstrata implements Template
{
    public function metodo3()
    {
        echo "Estou funcionando";
    }
}

class Classe extends ClasseAbstrata  
{
    function __construct($parametro)
    {
        
    }

    public function metodo1()
    {
        echo "Executando metodo 1<br>";
    }

    public function metodo2($parametro)
    {
        echo "Executando método 2, passando $parametro";
    }

}

echo '
<pre>
interface Template 
{
    function metodo1();

    public function metodo2 ($parametro);
}

abstract class ClasseAbstrata extends Template 
{
    public function metodo3()
    {
        echo "Estou funcionando";
    }
}

class Classe implements ClasseAbstrata 
{
    function __construct($parametro)
    {
        
    }
}

$exemplo = Classe();

$exemplo.metodo3();
</pre>';

echo '<hr>';

print('<p>Resposta !!</p>');
echo '
<pre>
interface Template 
{
    public function metodo1();

    public function metodo2 ($parametro);
}

abstract class ClasseAbstrata implements Template 
{
    public function metodo3()
    {
        echo "Estou funcionando";
    }
}

class Classe extends ClasseAbstrata 
{
    function __construct($parametro)
    {
        
    }

    public function metodo1()
    {
        echo "Executando metodo 1<br>";
    }

    public function metodo2($parametro)
    {
        echo "Executando método 2, passando $parametro";
    }

}
$exemplo =  new Classe("oi");

$exemplo->metodo3();
</pre>';
$exemplo =  new Classe("oi");

$exemplo->metodo3();
